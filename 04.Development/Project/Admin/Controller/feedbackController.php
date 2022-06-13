<?php

require_once "../Model/DBConnection.php";  
$db =  new DBConnect();
$dbconnect = $db->connect();
        

// $sql = $dbconnect->prepare("SELECT * FROM m_review_rating INNER JOIN m_book ON m_review_rating.book_id =m_book.id WHERE m_review_rating = $id AND m_book.del_flg =0 ");
$sql = $dbconnect->prepare("SELECT m_user_list.user_name,m_book.book_name,m_category.category_name,m_review_rating.customer_comment,m_review_rating.customer_rating FROM `m_review_rating` 
INNER JOIN m_user_list ON m_review_rating.customer_id=m_user_list.id 
INNER JOIN m_book ON m_review_rating.book_id= m_book.id 
INNER JOIN m_category ON m_review_rating.category_id=m_category.id
WHERE m_review_rating.del_flg=0;");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
