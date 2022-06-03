<?php
require "../Model/DBConnection.php";

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect -> prepare("SELECT * From m_adminlogin");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo"<pre>";
    // print_r($result);

    