<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/ banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$student = new Student(
    id: null, 
    name: "Patricia Freitas",
    birthDate: new \DateTimeImmutable(datetime: '1986-10-25'));

// $sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(param: ':name', value: $student->name());
$statement->bindValue(param: ':birth_date', value: $student->birthDate()->format(format:'Y-m-d'));
if($statement->execute())
    echo 'Aluno incluído';


