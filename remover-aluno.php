<?php

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare(query: 'DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(param: 1,  value: 2, type: PDO::PARAM_INT);

var_dump($preparedStatement->execute());