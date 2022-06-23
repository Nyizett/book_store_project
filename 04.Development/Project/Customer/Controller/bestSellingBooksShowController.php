<?php


$id = $_POST['id'];
require_once "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();


$sql = $dbconnect->prepare("SELECT author_name,book_image,book_name,book_price,rating,m_book.id AS Book_Id FROM `m_book` INNER JOIN `m_author` ON m_book.author_id = m_author.id WHERE m_book.id = $id AND m_book.del_flg =0 ");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
    //         if(count($result) > 0){

    //             require '../../Customer/View/bookDetails.php';
    //         }else{
    //             echo "ur book does not exist";
    //         }

    // }else{
    //     echo 'no';
    // }
