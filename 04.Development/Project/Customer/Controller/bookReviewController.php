<?php
    if (isset($_POST['send'])) {
        $data = json_decode($_POST["send"], true);
        $id = $data['id'];
        $book_id = $data['book_id'];
        $category_id = $data['category_id'];
        $comment = $data['comment'];
      

        require "../../Admin/Model/DBConnection.php";
        $db =  new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
        "INSERT INTO m_review_rating
        (
            customer_id,
            book_id,
            category_id,
            customer_comment,
            del_flg,
            create_date
        )
        VALUES (
            :cid,
            :bid,
            :categoryid,
            :comment,
            :del_flg,
            :create_date
            
        )");
        $sql->bindValue(":cid", $id);
        $sql->bindValue(":bid", $book_id);
        $sql->bindValue(":categoryid", $category_id);
        $sql->bindValue(":comment", $comment);
        $sql->bindValue(":del_flg", 0);
        $sql->bindValue(":create_date", date("d/m/Y"));
        $sql->execute();
    
    }
