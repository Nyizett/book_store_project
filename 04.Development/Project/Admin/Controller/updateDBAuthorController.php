<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $id = $_POST['id'];
    $authorName = $_POST['autName'];
    $authorImage = $_POST['autImage'];
    $authorBio = $_POST['autBio'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_author SET
            author_name = :name,
            author_image = :image,
            author_bio = :bio
            WHERE id = :id"
    );
    $sql->bindValue(":name", $authorName);
    $sql->bindValue(":image", $authorImage);
    $sql->bindValue(":bio", $authorBio);
    $sql->bindValue(":id", $id);
    $sql->execute();
    header ("Location: ../View/authorInfo.php");
}