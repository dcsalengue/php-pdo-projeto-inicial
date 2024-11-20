<?php
use Alura\Pdo\Domain\Model\Student;
require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/ banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$preparedStatement = $pdo->prepare(query: 'DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(param: 1,  value: 2, type: PDO::PARAM_INT);

var_dump($preparedStatement->execute());