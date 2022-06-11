<?php

    if(isset($_POST["send"])){
        $data=json_decode($_POST["send"], true);
    
        

    
        require "../../Admin/Model/DBConnection.php";
      
      
    
       
    $id = $data['id'];
    $db = new DBConnect();
    $dbconnect = $db->connect();
        
    $sql = $dbconnect->prepare("SELECT m_book.id,m_book.book_image,m_book.book_name,m_book.book_price,m_author.author_name FROM `m_book` INNER JOIN `m_author` ON m_book.author_id = m_author.id WHERE m_book.id = $id AND m_book.del_flg =0 ");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
       
        
        echo json_encode($result);
        // print_r($books);
        // echo(count($books));
        // print_r($books);
      
        
    
    
    };
   

    if(isset($_POST['cart'])){
        $data=json_decode($_POST["cart"], true);
        print_r($data);
    };
?>
