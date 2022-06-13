<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $Guideimg = $_POST['guideImg'];
    $Guidepargh = $_POST['guideParagraph'];
    $UserName=$_SESSION['username'];


    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_guide
        (
            guide_text,
            guide_image,
            create_date,
            create_by
        )
        VALUES (
            :gtext,
            :gimage
            :todayDate,
            :adminName
        )"
    );
    $sql->bindValue(":gtext", $Guidepargh  );
    $sql->bindValue(":gimage",  $Guideimg);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header ("Location: ../View/setting.php");
}