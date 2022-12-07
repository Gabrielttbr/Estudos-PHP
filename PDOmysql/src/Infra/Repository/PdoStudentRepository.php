<?php

namespace Alura\Pdo\Infra\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;

class PdoStudentRepository implements StudentRepository
{
    private $conexao;

    public function __construct(ConnectionCreator $temporaryConection)
    {
        $this->conexao = $temporaryConection->createConnection();
    }

    public function allStudents(): array
    {
        $sql_select = $this->conexao->query("SELECT * FROM students");
        return $sql_select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function studentsBirthAt(\DateTimeImmutable $birthDate): array
    {
        $statement = $this->conexao->prepare("SELECT * FROM AluraPdo.students  WHERE birth_date = :date;");
        $statement->bindValue(":date", $birthDate->format("Y-m-d"));
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function update(Student $student): bool
    {
        $statement = $this->conexao->prepare("UPDATE AluraPdo.students SET name = :name,birth_date = :date WHERE id = :id;");
        $statement->bindValue(':name', $student->getName());
        $statement->bindValue(':date', $student->getBirthDate());
        $statement->bindValue(':id', $student->getId());
        $resultStatement = $statement->execute();
        if($resultStatement){
            $student->defineId($this->conexao->lastInsertId());
        }
        return $resultStatement;
    }
    public function save(Student $student): bool
    {
        if($student->getId() === 0){
            return $this->insert($student);
        }
        return $this->update($student);
    }
    public function insert(Student $student): bool
    {
        $statement = $this->conexao->prepare('INSERT INTO AluraPdo.students (name, birth_date) VALUES(:name, :date);');
        $statement->bindValue(':name', $student->getName());
        $statement->bindValue(':date', $student->getBirthDate());
        return $statement->execute();
    }
    public function remove(Student $student): bool
    {
        $statement = $this->conexao->prepare('DELETE FROM AluraPdo.students WHERE id = :id;');
        $statement->bindValue(":id", $student->getId());
        return $statement->execute();
    }
}