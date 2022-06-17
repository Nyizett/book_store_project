<?php
require_once "../Model/DBConnection.php";
// session_start();
$UserName=$_SESSION['username'];
//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect -> prepare("SELECT * From m_adminlogin WHERE del_flg = 0 AND admin_username NOT IN('$UserName')");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo"<pre>";
    // print_r($result);

    