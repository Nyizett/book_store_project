<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $authorName = $_POST['autName'];
    $authorImage = $_POST['autImage'];
    $authorBio = $_POST['autBio'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_author
        (
            author_name,
            author_image,
            author_bio
        )
        VALUES (
            :autname,
            :autimage,
            :autbio)"
    );
    $sql->bindValue(":autname", $authorName);
    $sql->bindValue(":autimage", $authorImage);
    $sql->bindValue(":autbio", $authorBio);

    $sql->execute();
}