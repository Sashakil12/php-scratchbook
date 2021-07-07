<?php
$id = $_POST['id']??null;
var_dump($id);
if(!$id){
    header('Location: index.php');
}
/** @var $pdo \PDO */
$pdo = require_once 'utils/database.php';

$statement = $pdo->prepare("DELETE FROM products WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();

header('Location: index.php');
?>