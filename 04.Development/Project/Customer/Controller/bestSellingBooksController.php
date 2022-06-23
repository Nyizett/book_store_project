<?php
require_once "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT book_id,sum(order_d_quantity)  FROM m_order_details WHERE del_flg=0 group by book_id ORDER BY sum(order_d_quantity) DESC LIMIT 5");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
