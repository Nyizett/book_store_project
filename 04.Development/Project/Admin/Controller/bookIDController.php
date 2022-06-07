<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT id,author_name From m_author WHERE del_flg = 0");
$sql->execute();

$authorList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect -> prepare("SELECT id,category_name From m_category WHERE del_flg = 0");
$sql->execute();

$categoryList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);

