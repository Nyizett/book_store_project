<?php

$name = $_POST['name'];
require_once "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT author_name,book_image,book_name,book_price,rating,view_count,m_book.id AS Book_Id FROM `m_book` 
INNER JOIN m_author ON m_book.author_id=m_author.id 
WHERE m_book.book_name LIKE '%$name%' AND m_book.del_flg=0");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
