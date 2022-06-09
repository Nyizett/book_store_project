
<?php
require_once "../Model/DBConnection.php";
{
// $id =  $_GET['id'];

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db ->connect();

$sql = $dbconnect->prepare(
    "SELECT * FROM `m_order_details` 
    LEFT JOIN m_book ON m_order_details.book_id =m_book.id 
    WHERE m_order_details.user_id=1; ");

//  $sql->bindValue(":id", $id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
}