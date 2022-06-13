<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $authorName = $_POST['autName'];
    $authorImage = $_POST['autImage'];
    $authorBio = $_POST['autBio'];
    $UserName=$_SESSION['username'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_author
        (
            author_name,
            author_image,
            author_bio,
            create_date,
            create_by
        )
        VALUES (
            :autname,
            :autimage,
            :autbio,
            :todayDate,
            :adminName)"
    );
    $sql->bindValue(":autname", $authorName);
    $sql->bindValue(":autimage", $authorImage);
    $sql->bindValue(":autbio", $authorBio);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header ("Location: ../View/authorInfo.php");
}