<?php

$id = $_POST['id'];
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT m_category.category_name,COUNT( m_order_details.book_id) AS boughtCategoryAmount FROM `m_order_details`
INNER JOIN m_book ON m_order_details.book_id=m_book.id
INNER JOIN m_author ON m_book.author_id=m_author.id
INNER JOIN m_category ON m_book.category_id=m_category.id
WHERE m_order_details.user_id=1 GROUP BY m_category.category_name ORDER BY COUNT(m_category.id) DESC LIMIT 5");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
