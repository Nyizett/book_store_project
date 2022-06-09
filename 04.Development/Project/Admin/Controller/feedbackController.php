<?php

require_once "../Model/DBConnection.php";  
$db =  new DBConnect();
$dbconnect = $db->connect();
        

// $sql = $dbconnect->prepare("SELECT * FROM m_review_rating INNER JOIN m_book ON m_review_rating.book_id =m_book.id WHERE m_review_rating = $id AND m_book.del_flg =0 ");
$sql = $dbconnect->prepare("SELECT * FROM m_review_rating WHERE del_flg = 0");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
