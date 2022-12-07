<?php

namespace Alura\Pdo\Domain\Model;

class Student
{
    private ?int $id;
    private string $name;
    private \DateTimeInterface $birthDate;
    /** @var Phone[] */
    private array $phones = [];
    public function __construct(?int $id=0, string $name, \DateTimeInterface $birthDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate->format('Y-m-d');
    }
    public function defineId($id){
       $this->id = $id;
    }

    public function age(): int
    {
        return $this->birthDate
            ->diff(new \DateTimeImmutable())
            ->y;
    }
    public function addPhone(Phone $phone){
        $this->phones[] = $phone;
    }
}
