<?php

if(isset($_GET['id'])) {
    
        require "../../Admin/Model/DBConnection.php";   
        $db =  new DBConnect();
        $dbconnect = $db->connect();
        $id= $_GET['id'];
     
       
        $sql = $dbconnect->prepare("SELECT * FROM `m_book` INNER JOIN `m_author` ON m_book.author_id = m_author.id   INNER JOIN `m_category` ON m_book.category_id = m_category.id WHERE m_book.id = $id AND m_book.del_flg =0 ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);



        $viewCount = $result['0']['view_count'] + 1;
        $sql = $dbconnect->prepare("UPDATE `m_book`
        SET view_count= :count
    
        WHERE id=:id;");

        $sql->bindValue(":count", $viewCount);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if(count($result) > 0){
            
            require '../../Customer/View/bookDetails.php';
        }else{
            echo "ur book does not exist";
        }
      
}else{
    echo 'no';
}


