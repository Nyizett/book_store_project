<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Info</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/authorInfo.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <link rel="stylesheet" href="../resource/css/dashboard.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div id="navbar" class="my-nav"></div>
            <!-- Author List-->
            <div class="col-8 offset-3">
                <p class="h3 mt-5">Book List</p>
                <button class="custombutton btn-sm offset-10  bg-warning  col-2 mb-4"><a href="../View/addBook.php" class="text-dec fw-bold text-dark">ADD BOOK</a></button>
                <table class="table table-striped table-sm mt-4">
                    <tr class="tb-text">
                        <th class="col-1">No</th>
                        <th class="col-1">Image</th>
                        <th class="col-2">Name</th>
                        <th class="col-2">Category</th>
                        <th class="col-2">Author</th>
                        <th class="col-2">Price</th>
                        <th colspan=2>Actions</th>
                    </tr>
                    <?php
                    $count = 1;
                    require "../Controller/bookListController.php";
                    foreach ($result as $key => $value) {
                        echo "<tr class='tb-text'>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $value['book_name'] . "</td>";
                        echo "<td class='tb-img'> <img src='../../Images/" . $value['book_image'] . "' </td>";
                        echo "<td>" . $value['category_id'] . "</td>";
                        echo "<td>" . $value['author_id'] . "</td>";
                        echo "<td>" . $value['book_price'] .  ",000 MMK" . "</td>";
                        echo "<td><a href='../View/editBook.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                        echo "<td><a href='../Controller/deleteBookController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                        echo "</tr>";
                        $count++;
                        
                    }
                    ?>
                </table>
                <button class="custombutton btn-sm offset-10  bg-warning  col-2 mb-4"><a href="../View/addBook.php" class="text-dec fw-bold text-dark">ADD BOOK</a></button>
            </div>
        </div>
    </div>
    
</body>

</html>