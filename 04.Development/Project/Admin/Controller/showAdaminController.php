<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect -> prepare("SELECT * From m_adminlogin WHERE del_flg = 0");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo"<pre>";
    // print_r($result);

    