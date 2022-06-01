<?php
require "../Model/DBConnection.php";

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect -> prepare("SELECT * From m_author");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

require "../View/authorInfo.php";