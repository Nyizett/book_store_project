<?php
require_once "../Model/DBConnection.php";
{
$id =  $_GET['id'];

//Call DB Connection
$db =  new DBConnect();
$dbconnect = $db ->connect();

$sql = $dbconnect->prepare(
    "SELECT * FROM m_book
    INNER JOIN m_category ON m_book.category_id = m_category.id
    INNER JOIN m_author ON m_book.author_id = m_author.id WHERE m_book.id = :id;");

$sql->bindValue(":id", $id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
}









//{
//$id =  $_GET['id'];
//$file = $_FILES['bookFile']['name'];
   // $location = $_FILES['bookFile']['tmp_name']; 

    // if (move_uploaded_file($location, "../../Images/" . $file)) { -->
        
    //     $db =  new DBConnect();
    //     $dbconnect = $db->connect();

    //     $sql = $dbconnect->prepare(
    //         "SELECT * FROM m_book
    //         WHERE id = :id;
            
    //     ");

    //     $sql->bindValue(":id", $id);
    //     $sql->execute();

    //     echo "Success";
    // } else {
    //     echo "Error";
    // }
//}  


