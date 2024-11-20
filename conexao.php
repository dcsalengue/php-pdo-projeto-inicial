<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';


$databasePath = __DIR__ . '/ banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);



$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');

echo ' Conectei!';