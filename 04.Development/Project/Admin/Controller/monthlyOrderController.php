<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT SUM(order_d_quantity) as totalQuantity,MONTH(create_date) as month
FROM m_order_details GROUP BY month");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

// print json_encode($data);
