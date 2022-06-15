<?php
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT sum(view_count),id  FROM m_book WHERE del_flg=0 group by id  ORDER BY sum(view_count) DESC LIMIT 5");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
