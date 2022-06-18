<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author's Book</title>
    <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/homepage.css" />
    <link rel="stylesheet" href="../resource/css/categories.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../resource/css/common.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
</head>

<body>

    <script>
        let authorId = <?php echo $_GET["id"] ?>
    </script>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">
        <?php require "./common.php" ?>
    </nav>
    <!-- Header -->
    <div class="container-fluid bg p-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="text-primary">Authors</h3>
            <div class="text-primary">
                <b>Author</b> -> <span class="authorName"></span>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid d-flex justify-content-between align-items-center my-4">
        <div class="container">
            <div class="row g-0">

                <?php
                $id = $_GET["id"];
                require "../Controller/authorBookSearchController.php";

                if (count($result) == 0) {
                    echo "<div class='d-flex flex-column justify-content-center align-items-center mt-5 noBook'>";
                    echo "<h4>There is no book.</h4>";
                    echo "</div>";
                }
                // for ($i = 0; $i < count($result); $i++) {
                //     echo "<div class='col-lg-3 col-md-6 col-sm-10 text-light  d-flex justify-content-between align-items-center mx-3 my-2'>";
                //     echo "<div class='my-card' >";
                //     echo " <div class='my-card-img'>";
                //     echo  "<img src='../../Admin/resource/img/book cover/" . $result[$i]["book_image"] . "' 
                //     alt=''/>";
                //     echo "</div>";
                //     echo "<div class='my-card-info'>";
                //     echo "<h5>" . $result[$i]['book_name'] . "</h5>";
                //     echo "<div class='mb-2'>";
                //     echo "<span style='font-size:x-small'>";
                //     $star = 3;
                //     for ($s = 0; $s < 5; $s++) {
                //         if ($star > $s) {
                //             echo "  <i class='fa-solid fa-star'></i>";
                //         } else {
                //             echo " <i class='fa-regular fa-star'></i>";
                //         }
                //     }
                //     echo "</span><br>";
                //     echo "  <span style='font-size:x-small'>" . $result[$i]['author_name'] . "</span> ";
                //     echo "</div>";
                //     echo " <p style='font-weight:500 ;'>" . number_format($result[$i]['book_price']) . " MMK</p>";
                //     echo " <button class='btn cart card-button px-1 rounded-1 me-1' id='" . $result[$i]['Book_Id'] . "' ><i class='fa-solid fa-cart-shopping me-1'></i>add
                //   to
                //   cart</button>";
                //     echo " <span id='" . $result[$i]['Book_Id'] . "' class='btn btn-primary bookdetail card-button'><i class='fa-solid fa-eye'></i> 4</span>";
                //     echo "</div>";
                //     echo "</div>";
                //     echo "</div>";
                // }


                for ($i = 0; $i < count($result); $i++) {
                    echo "<div class='col-lg-3 col-md-6 col-sm-10 text-light  d-flex justify-content-between align-items-center mx-5 my-2'>";
                    echo "<div class='my-card' >";
                    echo " <div class='my-card-img'>";
                    echo  "<img src='../../Images/" . $result[$i]["book_image"] . "' 
                    alt=''/>";
                    echo "</div>";
                    echo "<div class='my-card-info'>";
                    echo "<h5 class='catTitle'>" . $result[$i]['book_name'] . "</h5>";
                    echo "<div class='mb-2'>";
                    echo "<span style='font-size:x-small'>";
                    $star = $result[$i]['rating'];
                    for ($s = 0; $s < 5; $s++) {
                        if ($star > $s) {
                            echo "  <i class='fa-solid fa-star text-warning'></i>";
                        } else {
                            echo " <i class='fa-solid fa-star text-dark'></i>";
                        }
                    }
                    echo "</span><br>";
                    echo "  <span style='font-size:x-small'>" . $result[$i]['author_name'] . "</span> ";
                    echo "</div>";
                    echo " <p class='catPrice' style='font-weight:500 ;'>" . number_format($result[$i]['book_price']) . " MMK</p>";
                    echo " <button class='btn cart card-button px-1 rounded-1 me-1' id='" . $result[$i]['Book_Id'] . "' ><i class='fa-solid fa-cart-shopping me-1'></i>add
                       to
                       cart</button>";
                    echo " <span id='" . $result[$i]['Book_Id'] . "' class='btn btn-primary bookdetail card-button view-btn'><i class='fa-solid fa-eye'></i> " . $result[$i]['view_count'] . "</span>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }

                ?>


            </div>
        </div>
    </div>

    <footer id="footer" class="container-fluid commom-bg  mt-5">

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../resource/js/common.js"></script>
    <script src="../resource/js/footerCommon.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
    <script src="../resource/js/authorBook.js" defer></script>
    <script type="text/javascript">

    </script>

</body>

</html>