<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $Guideimg = $_POST['guideImg'];
    $Guidepargh = $_POST['guideParagraph'];


    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_guide
        (
            guide_text,
            guide_image
        )
        VALUES (
            :gtext,
            :gimage
        )"
    );
    $sql->bindValue(":gtext", $Guidepargh  );
    $sql->bindValue(":gimage",  $Guideimg);

    $sql->execute();
    header("location: ../view/setting.php");
}