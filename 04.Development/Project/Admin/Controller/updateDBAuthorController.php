<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if (isset($_POST)) {
    $id = $_POST['id'];
    $authorName = $_POST['autName'];
    $authorBio = $_POST['autBio'];
    $UserName = $_SESSION['username'];

    $autfile = $_FILES['autImage']['name'];
    $location = $_FILES['autImage']['tmp_name'];
    

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    if (file_exists($_FILES['autImage']['tmp_name'])) {
        if (move_uploaded_file($location, "../../Admin/resource/img/authors/" . $autfile)) {
            

            $sql = $dbconnect->prepare(
                "UPDATE m_author SET
            author_name = :name,
            author_image = :image,
            author_bio = :bio,
            update_date=:todayDate,
            update_by=:adminName
            WHERE id = :id"
            );
            $sql->bindValue(":name", $authorName);
            $sql->bindValue(":image", $autfile);
            $sql->bindValue(":bio", $authorBio);
            $sql->bindValue(":id", $id);
            $sql->bindValue(":todayDate", date("d/m/Y"));
            $sql->bindValue(":adminName", $UserName);
            $sql->execute();
            
        }
    } else {
        $sql = $dbconnect->prepare(
            "UPDATE m_author SET
        author_name = :name,
        author_bio = :bio,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
        );
        $sql->bindValue(":name", $authorName);
        $sql->bindValue(":bio", $authorBio);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":todayDate", date("d/m/Y"));
        $sql->bindValue(":adminName", $UserName);
        $sql->execute();
    }
    header("Location: ../View/authorInfo.php");
}
