<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../View/adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Navigation Bar -->
            <div id="navbar" class="my-nav"></div>
            <!--Add Book-->
            <div class="col-8 offset-3">
            <a href="./bookInfo.php" class="custombutton text-dec text-dark btn btn-sm-2 fw-bold ms-4 mt-4">BACK</a>

                <form action="../Controller/updateDBBookController.php" method="POST" enctype="multipart/form-data">
                    <div class="row container col-md-8 mt-2 ">
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <input type="hidden" name="id" value="<?php require_once "../Controller/editBookController.php";echo $result[0]['id']; ?>">
                                <label for="pwd" class="form-label">Name</label>
                                <input type="text" value="<?php echo $result[0]['book_name']; ?>" class="form-control" id="pwd" name="bookName">
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="email" class="form-label">Category</label><br>
                                <select name="categoryID" id="" class="custombutton btn btn-white col-12">
                                    <?php
                                    require "../Controller/bookIDController.php";

                                    foreach ($categoryList as $key => $val) {
                                        if ($val['category_name']==$result[0]['category_name']) {
                                            echo "<option selected value='".$val['id']."' >" . $val['category_name'] . '</option>';
                                        }else{
                                            echo "<option value='".$val['id']."' >" . $val['category_name'] . '</option>';
                                        }
                                        
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label ">Price</label>
                                <input type="text" value="<?php echo $result[0]['book_price']; ?>" class="input-box form-control" id="email" name="bookPrice">
                            </div>
                            <div class="col mb-3 mt-3">
                                <label for="email" class="form-label">Author</label><br>
                                <select name="authorID" id="" class="custombutton btn btn-white col-12">
                                <?php
                                    
                                    foreach ($authorList as $key => $val) {
                                        if ($val['author_name']==$result[0]['author_name']) {
                                            echo "<option selected value='".$val['id']."' >" . $val['author_name'] . '</option>';
                                        }else{
                                            echo "<option value='".$val['id']."' >" . $val['author_name'] . '</option>';
                                        }
                                        
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Pages</label>
                                <input type="text" value="<?php echo $result[0]['book_pages']; ?>" class="input-box form-control" id="pwd" name="bookPg">
                            </div>
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Size</label>
                                <input type="text" value="<?php echo $result[0]['book_size']; ?>" class="input-box form-control" id="pwd" name="bookSize">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Established</label>
                                <input type="text" value="<?php echo $result[0]['book_established']; ?>" class="input-box form-control" id="pwd" name="bookEsta">
                            </div>
                            <div class="col mb-3 mt-3 ">
                                <label for="pwd" class="form-label">Star Rating</label>
                                <input type="number" value="<?php echo $result[0]['rating']; ?>" class="input-box form-control" id="pwd" name="bookRating">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label">Image</label>
                                <input type="file" name="bookFile" value="<?php echo $result[0]['book_image']; ?>" class="form-control" id="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="comment" class="mt-3">Description</label>
                            <textarea class="input-box form-control ms-2" rows="8" id="comment" name="bookDes"><?php echo $result[0]['book_description']; ?></textarea>
                        </div>
                        <button type="submit" id="submitBtn" class="custombutton btn fw-bold mt-4 mb-4">SAVE</button>
                        <!-- <input type="submit" id="submitBtn" name="submitBtn" class="custombutton btn fw-bold mt-4 mb-4" value="SAVE"> -->
                    </div>
                </form>
                <p class="mt-4 fs-3 text-success" id="result"></p>
            </div>
        </div>
    </div>
</body>

</html>