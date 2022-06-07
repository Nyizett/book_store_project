<?php

require_once "../Model/DBConnection.php";

// Get Data from Insert Book From
if (isset($_POST)) {
    $bookName = $_POST['bookName'];
    $bookCategory = $_POST['categoryID'];
    $bookPrice = $_POST['bookPrice'];
    $bookAuthor = $_POST['authorID'];
    $bookPages = $_POST['bookPg'];
    $bookSize = $_POST['bookSize'];
    $bookEstablished = $_POST['bookEsta'];
    // $bookimage = $_POST['bookImg'];
    $bookDescription = $_POST['bookDes'];



    $file = $_FILES['bookFile']['name'];
    $location = $_FILES['bookFile']['tmp_name'];

    if (move_uploaded_file($location, "../../Images/" . $file)) {
        //Call DB Connection
        $db =  new DBConnect();
        $dbconnect = $db->connect();

        $sql = $dbconnect->prepare(
            "INSERT INTO m_book 
        (
            book_name,
            category_id,
            book_price,
            author_id,
            book_pages,
            book_size,
            book_established,
            book_description,
            book_image,
            create_date
        )
        VALUES (
            :bname,
            :catID,
            :bprice,
            :autID,
            :bpg,
            :bsize,
            :best,
            :bdes,
            :path,
            :create_date)"
        );

        $sql->bindValue(":bname", $bookName);
        $sql->bindValue(":catID", $bookCategory);
        $sql->bindValue(":bprice", $bookPrice);
        $sql->bindValue(":autID", $bookAuthor);
        $sql->bindValue(":bpg", $bookPages );
        $sql->bindValue(":bsize", $bookSize);
        $sql->bindValue(":best", $bookEstablished);
        $sql->bindValue(":bdes", $bookDescription);
        $sql->bindValue(":path", $file);
        $sql->bindValue(":create_date", date("d/m/Y"));

        $sql->execute();

        echo "Success";
        
    } else {
        echo "Error";
    }
    
}
