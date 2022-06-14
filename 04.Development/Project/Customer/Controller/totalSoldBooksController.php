<?php
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT sum(order_d_quantity) AS total_Sold_Book  FROM m_order_details WHERE del_flg=0   ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
