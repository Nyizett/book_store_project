<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT COUNT(id) as userQty From m_user_list");
$sql->execute();

$userQty = $sql->fetchAll(PDO::FETCH_ASSOC);

// print_r($userQty);

//getting total amount from m_order_details
$sql = $dbconnect -> prepare("SELECT SUM(total_amount) as totalPrice From m_order_details");
$sql->execute();

$totalPrice = $sql->fetchAll(PDO::FETCH_ASSOC);

//getting total order from m_order_details
$sql = $dbconnect -> prepare("SELECT SUM(order_d_quantity) as totalOrder From m_order_details");
$sql->execute();

$totalOrder = $sql->fetchAll(PDO::FETCH_ASSOC);

