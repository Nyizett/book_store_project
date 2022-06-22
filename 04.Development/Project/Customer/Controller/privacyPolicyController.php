<?php
require_once "../../Admin/Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT * From m_privacypolicy WHERE del_flg = 0");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);