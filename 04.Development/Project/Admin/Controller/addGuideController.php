<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $file = $_FILES['guideImg']['name'];
    $location = $_FILES['guideImg']['tmp_name'];
    $Guidepargh = $_POST['guideParagraph'];
    $UserName=$_SESSION['username'];


    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    if (move_uploaded_file($location, "../../Images/" . $file)) {
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
            :gimage,
            :todayDate,
            :adminName
        )"
    );
    $sql->bindValue(":gtext", $Guidepargh  );
    $sql->bindValue(":gimage",  $file);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    }
    header ("Location: ../View/setting.php");
}