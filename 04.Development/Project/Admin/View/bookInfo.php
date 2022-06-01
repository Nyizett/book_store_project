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
                
                <table class="table table-striped table-sm mt-4">
                    <tr class="tb-text">
                        <th class="col-1">No</th>
                        <th class="col-1">Image</th>
                        <th class="col-2">Name</th>
                        <th class="col-2">Category</th>
                        <th class="col-2">Author</th>
                        <th class="col-2">Price</th>
                        <th class="col-2">Actions</th>
                    </tr>
                    <tr class="tb-text">
                        <td >1</td>
                        <td ><img src="../resource/img/authors/minlu.jpg" alt="" class="customimagesize" /> </td>
                        <td >TookP</td>
                        <td>Cartoon</td>
                        <td>No</td>
                        <td>2,000 MMK</td>
                        <td>
                            <button class="btn btn-outline-primary ">
                                <ion-icon name="create"></ion-icon>
                            </button> <button class="btn btn-outline-danger mt-1 ">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </button>
                        </td>
                    </tr>
                    <tr class="tb-text">
                        <td>2</td>
                        <td><img src="../resource/img/authors/minlu.jpg" alt="" class="customimagesize" /> </td>
                        <td >TookP</td>
                        <td>Cartoon</td>
                        <td>No</td>
                        <td>2,000 MMK</td>
                        <td>
                            <button class="btn btn-outline-primary ">
                                <ion-icon name="create"></ion-icon>
                            </button> <button class="btn btn-outline-danger mt-1 ">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </button>
                        </td>
                    </tr>
                    <tr class="tb-text">
                        <td>3</td>
                        <td><img src="../resource/img/authors/minlu.jpg" alt="" class="customimagesize" /> </td>
                        <td >TookP</td>
                        <td>Cartoon</td>
                        <td>No</td>
                        <td>2,000 MMK</td>
                        <td>
                            <button class="btn btn-outline-primary ">
                                <ion-icon name="create"></ion-icon>
                            </button> <button class="btn btn-outline-danger mt-1 ">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </button>
                        </td>
                    </tr>
                </table>
                <button class="custombutton btn-sm offset-10  bg-warning  col-2"><a href="../View/addBook.php" class="text-dec fw-bold text-dark">ADD BOOK</a></button>
            </div>
        </div>
    </div>
    
</body>

</html>