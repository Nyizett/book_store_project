<?php
require_once "../../Admin/Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT web_address From m_site_master");
$sql->execute();

$webAddress = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect -> prepare("SELECT web_email From m_site_master");
$sql->execute();

$webEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect -> prepare("SELECT web_phno From m_site_master");
$sql->execute();

$webPhone = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $dbconnect -> prepare("SELECT g_map_link From m_site_master");
$sql->execute();

$webGML = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);