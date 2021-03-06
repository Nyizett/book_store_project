<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT m_user_list.user_name,m_user_list.user_address,m_delivery_fees.delivery_fees,m_orders.total_amount,m_orders.create_date FROM m_orders 
 INNER JOIN m_user_list ON m_orders.customer_id=m_user_list.id  
 INNER JOIN m_delivery_fees ON m_orders.delivery_fees_id=m_delivery_fees.id 
WHERE m_orders.del_flg = 0  AND m_orders.create_date = :todaydate");
$sql->bindValue(":todaydate", date("Y-m-d"));
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);


// echo "<pre>";
// print_r($result);
// echo date("Y-m-d");
//date("d/m/Y")

// SELECT SUM(total_amount) FROM m_order_details WHERE create_date = "09/06/2022"; 

// SELECT * FROM `m_orders` 
// INNER JOIN m_order_details ON m_orders.customer_id=m_order_details.user_id 
// LEFT JOIN m_book ON m_order_details.book_id =m_book.id
// INNER Join m_user_list ON m_orders.customer_id=m_user_list.id
// INNER JOIN m_delivery_fees ON m_orders.delivery_fees_id=m_delivery_fees.id
// WHERE m_order_details.create_date="09/06/2022"