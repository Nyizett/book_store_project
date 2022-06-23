<?php
require_once "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_user_list  WHERE del_flg=0 ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
