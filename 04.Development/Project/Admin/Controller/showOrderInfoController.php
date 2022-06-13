<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT m_user_list.user_name,m_user_list.user_address,m_delivery_fees.delivery_city_name,m_delivery_fees.delivery_fees,m_orders.total_amount,m_orders.customer_id FROM m_orders 
INNER JOIN m_user_list ON m_orders.customer_id=m_user_list.id  
INNER JOIN m_delivery_fees ON m_orders.delivery_fees_id=m_delivery_fees.id 
WHERE m_orders.del_flg = 0 ");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);