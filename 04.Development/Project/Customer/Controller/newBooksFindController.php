<?php


require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT m_book.id,m_book.book_image,m_book.book_name,m_book.book_price,m_author.author_name,m_book.rating,m_book.create_date FROM m_book INNER JOIN m_author ON m_book.author_id = m_author.id WHERE m_book.del_flg=0 ORDER BY m_book.create_date DESC LIMIT 5;");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
