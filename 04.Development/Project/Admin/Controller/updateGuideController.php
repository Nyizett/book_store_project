<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if (isset($_POST)) {
    $file = $_FILES['guideImg']['name'];
    $location = $_FILES['guideImg']['tmp_name'];
    $Guidepg = $_POST['guideParagraph'];
    $id = $_POST['id'];
    $UserName = $_SESSION['username'];
    // echo $id;
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    if (file_exists($_FILES['guideImg']['tmp_name'])) {
        if (move_uploaded_file($location, "../../Images/" . $file)) {
            $sql = $dbconnect->prepare(
                "UPDATE m_guide SET
        guide_text = :gline,
        guide_image = :gphoto,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
            );
            $sql->bindValue(":gline",  $Guidepg);
            $sql->bindValue(":gphoto",  $file);
            $sql->bindValue(":id", $id);
            $sql->bindValue(":todayDate", date("d/m/Y"));
            $sql->bindValue(":adminName", $UserName);

            $sql->execute();
        }
    } else {
        $sql = $dbconnect->prepare(
            "UPDATE m_guide SET
        guide_text = :gline,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
        );
        $sql->bindValue(":gline", $Guidepg);
        $sql->bindValue(":id", $id);
        $sql->bindValue(":todayDate", date("d/m/Y"));
        $sql->bindValue(":adminName", $UserName);
    }
    header("location: ../View/setting.php");
}
