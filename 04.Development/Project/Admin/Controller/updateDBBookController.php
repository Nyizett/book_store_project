<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $id = $_POST['id'];
    $bookName = $_POST['bookName'];
    $bookCategory = $_POST['categoryID'];
    $bookAuthor = $_POST['authorID'];
    $bookPrice = $_POST['bookPrice'];
    $bookPages = $_POST['bookPg'];
    $bookSize = $_POST['bookSize'];
    $bookEstablished = $_POST['bookEsta'];
    $bookRating =$_POST['bookRating'];
    // $bookFile = $_POST['bookFile'];
    $bookDescription = $_POST['bookDes'];
    $UserName=$_SESSION['username'];

    $file = $_FILES['bookFile']['name'];
    $location = $_FILES['bookFile']['tmp_name'];
    $image = file_get_contents($location);

    echo $file;

    // echo "$bookCategory";

    echo "$id";
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();
    if(file_exists($_FILES['bookFile']['tmp_name'])){
        if (move_uploaded_file($location, "../../Images/" . $file)){
            $sql = $dbconnect->prepare(
                "UPDATE m_book SET
                    book_name = :name,
                    category_id = :catID,
                    author_id = :autID,
                    book_price = :price,
                    book_pages = :page,
                    book_size = :size,
                    book_established = :est,
                    rating   =:rating,
                    book_description = :des,
                    book_image = :bimage,
                    update_date =:updateDate,
                    update_by=:adminName
                    WHERE id = :id"
            );
                $sql->bindValue(":name", $bookName);
                $sql->bindValue(":catID", $bookCategory);
                $sql->bindValue(":price", $bookPrice);
                $sql->bindValue(":autID", $bookAuthor);
                $sql->bindValue(":page", $bookPages );
                $sql->bindValue(":size", $bookSize);
                $sql->bindValue(":est", $bookEstablished);
                $sql->bindValue(":rating", $bookRating);
                $sql->bindValue(":des", $bookDescription);
                $sql->bindValue(":bimage", $file);
                $sql->bindValue(":updateDate", date("d/m/Y"));
                $sql->bindValue(":id", $id);
                $sql->bindValue(":adminName", $UserName);
                $sql->execute();
            // header ("Location: ../View/bookInfo.php");
        }
    }else{
        $sql = $dbconnect->prepare(
            "UPDATE m_book SET
                book_name = :name,
                category_id = :catID,
                author_id = :autID,
                book_price = :price,
                book_pages = :page,
                book_size = :size,
                book_established = :est,
                rating   =:rating,
                book_description = :des,
                update_date =:updateDate,
                update_by=:adminName
                WHERE id = :id"
        );
            $sql->bindValue(":name", $bookName);
            $sql->bindValue(":catID", $bookCategory);
            $sql->bindValue(":price", $bookPrice);
            $sql->bindValue(":autID", $bookAuthor);
            $sql->bindValue(":page", $bookPages );
            $sql->bindValue(":size", $bookSize);
            $sql->bindValue(":est", $bookEstablished);
            $sql->bindValue(":rating", $bookRating);
            $sql->bindValue(":des", $bookDescription);
            $sql->bindValue(":updateDate", date("d/m/Y"));
            $sql->bindValue(":id", $id);
            $sql->bindValue(":adminName", $UserName);
            $sql->execute();
    }

    header ("Location: ../View/bookInfo.php");

}