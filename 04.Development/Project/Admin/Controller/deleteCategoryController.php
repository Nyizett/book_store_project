<?php
require_once "../Model/DBConnection.php";
{
    $id =  $_GET['id'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "SELECT m_book.book_name FROM `m_book` WHERE category_id= :id"
    );

    $sql->bindValue(":id", $id);
    $sql->execute();
    $result = $sql -> fetchAll(PDO :: FETCH_ASSOC);
    if(count($result) > 0){
        header ("Location: ../View/setting.php?id=noo");
    }else{
        header ("Location: ./deleteCategoryTrueController.php?id=$id");
    }
}
// UPDATE m_category SET
//             del_flg =1
//             WHERE id = :id
// 