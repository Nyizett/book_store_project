<?php
require_once "../Model/DBConnection.php";

//Call DB Connection
$db2 =  new DBConnect();
$dbconnect = $db2 ->connect();

$sql = $dbconnect -> prepare("SELECT * FROM `m_book` 
INNER JOIN m_author ON m_book.author_id=m_author.id 
INNER JOIN m_category ON m_book.category_id=m_category.id 
WHERE m_book.del_flg=0; ");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);
