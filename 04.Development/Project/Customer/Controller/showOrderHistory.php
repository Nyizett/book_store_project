
<?php

 $id = $_POST['id'];
 require_once "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT m_book.book_name,m_book.book_image,m_book.book_price,m_author.author_name,m_order_details.order_d_quantity,m_order_details.total_amount FROM `m_order_details`
INNER JOIN m_book ON m_order_details.book_id=m_book.id
INNER JOIN m_author ON m_book.author_id=m_author.id
WHERE m_order_details.user_id='$id'");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);