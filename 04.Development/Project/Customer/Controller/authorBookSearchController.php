<?php


require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_book INNER JOIN m_author ON m_book.author_id = m_author.id
INNER JOIN m_category ON m_book.category_id = m_category.id WHERE m_book.del_flg=0 AND m_book.author_id=$id");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($result);
