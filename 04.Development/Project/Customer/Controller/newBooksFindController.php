<?php


require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT * FROM m_book INNER JOIN m_author ON m_book.author_id = m_author.id WHERE m_book.del_flg=0 ORDER BY m_book.create_date DESC LIMIT 5");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
