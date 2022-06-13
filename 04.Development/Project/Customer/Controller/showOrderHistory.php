
<?php

 $id = $_POST['id'];
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM `m_order_details`
INNER JOIN m_book ON m_order_details.book_id=m_book.id
INNER JOIN m_author ON m_book.author_id=m_author.id
WHERE m_order_details.user_id='$id'");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);