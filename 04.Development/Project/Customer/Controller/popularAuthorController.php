<?php


require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();


$sql = $dbconnect->prepare("SELECT author_name,author_image,book_image,book_name,book_price,rating,m_book.id AS Book_Id,COUNT(author_id),m_author.id AS author_id  FROM m_order_details INNER JOIN `m_book` ON m_order_details.book_id = m_book.id INNER JOIN `m_author` ON m_book.author_id = m_author.id WHERE m_book.del_flg=0 group by author_id ORDER BY sum(author_id) DESC LIMIT 6");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
