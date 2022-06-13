<?php
require_once "../Model/DBConnection.php";
{
$id =  $_GET['id'];

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db ->connect();

$sql = $dbconnect->prepare(
    "SELECT * FROM m_shop
            WHERE id = :id;");

$sql->bindValue(":id", $id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);


}


