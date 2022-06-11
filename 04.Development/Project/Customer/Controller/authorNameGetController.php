<?php

$id = $_POST['id'];
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_author WHERE del_flg=0 AND id=$id");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
