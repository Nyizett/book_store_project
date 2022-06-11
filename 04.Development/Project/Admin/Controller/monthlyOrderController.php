<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT SUM(order_d_quantity) as totalQuantity,MONTHNAME(create_date) 
as month FROM m_order_details GROUP BY create_date ASC ");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$month = array();
$totalOrderQty = array();
foreach ($result as $row) {
    $month[] = $row['month'];
    $totalOrderQty[]  = $row['totalQuantity'];
}

// print json_encode($month);
// print json_encode($totalOrderQty);
