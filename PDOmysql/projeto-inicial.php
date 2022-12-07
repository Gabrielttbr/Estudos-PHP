<?php

require_once 'vendor/autoload.php';

use Alura\Pdo\Infra\Repository\PdoStudentRepository;
use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;

$student = new Student(5, 'Carlossspinmt', new \DateTimeImmutable('2008-11-09'));
var_dump($student);
$pdoS = new PdoStudentRepository(New ConnectionCreator());
var_dump($pdoS->studentsBirthAt(new \DateTimeImmutable('2008-11-09')));
var_dump($pdoS->allStudents());

