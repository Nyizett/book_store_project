<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $Guidephoto = $_POST['guideImg'];
    $Guidepg = $_POST['guideParagraph'];
    $id = $_POST['id'];
    // echo $id;
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_guide SET
        guide_text = :gline,
        guide_image = :gphoto
        WHERE id = :id"
    );
    $sql->bindValue(":gline",  $Guidepg);
    $sql->bindValue(":gphoto",  $Guidephoto);
    $sql->bindValue(":id", $id);

    $sql->execute();
     header("location: ../view/setting.php");
}