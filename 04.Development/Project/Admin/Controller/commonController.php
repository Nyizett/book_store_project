<?php
require_once "../Model/DBConnection.php";
{

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db ->connect();

$sql = $dbconnect->prepare(
    "SELECT web_logo,web_name  FROM m_site_master
            WHERE id = 1;
    ");

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
}