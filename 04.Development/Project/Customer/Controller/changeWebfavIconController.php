<?php
require_once "../../Admin/Model/DBConnection.php";
{
//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db ->connect();

$sql = $dbconnect->prepare(
    "SELECT fav_icon FROM m_site_master
    WHERE id = 1;   
    ");


$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);



}