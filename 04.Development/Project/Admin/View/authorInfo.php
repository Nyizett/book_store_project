<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Info</title>
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
                <p class="h3 mt-4">Author List</p>
                
                <table class="table table-striped table-sm mt-4">
                    <tr>
                        <th>No</th>
                        <th class="col-1">Image</th>
                        <th class="col-1">Name</th>
                        <th>Biography</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="../resource/img/authors/minlu.jpg" alt="" class="customimagesize" /> </td>
                        <td >Min Lu</td>
                        <td>Min Thein Kha ( born Aung Htun; 25 June 1939 – 1 August 2008) was a prominent Burmese writer, astrologer andpolitical prisoner.[1] He began his literary career in 1976, adopting the pseudonym Min Theinkha, and wrote hundreds of novels.</td>
                        <td>
                            <button class="btn btn-outline-primary ">
                                <ion-icon name="create"></ion-icon>
                            </button> <button class="btn btn-outline-danger mt-1 ">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="../resource/img/authors/minlu.jpg" alt="" class="customimagesize" /> </td>
                        <td >Min Lu</td>
                        <td>Min Thein Kha ( born Aung Htun; 25 June 1939 – 1 August 2008) was a prominent Burmese writer, astrologer andpolitical prisoner.[1] He began his literary career in 1976, adopting the pseudonym Min Theinkha, and wrote hundreds of novels.</td>
                        <td>
                            <button class="btn btn-outline-primary ">
                                <ion-icon name="create"></ion-icon>
                            </button> <button class="btn btn-outline-danger mt-1 ">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td ><img src="../resource/img/authors/minlu.jpg" alt="" class="customimagesize" /> </td>
                        <td >Min Lu</td>
                        <td>Min Thein Kha ( born Aung Htun; 25 June 1939 – 1 August 2008) was a prominent Burmese writer, astrologer andpolitical prisoner.[1] He began his literary career in 1976, adopting the pseudonym Min Theinkha, and wrote hundreds of novels.</td>
                        <td>
                            <button class="btn btn-outline-primary ">
                                <ion-icon name="create"></ion-icon>
                            </button> <button class="btn btn-outline-danger mt-1 ">
                                <ion-icon name="trash-sharp"></ion-icon>
                            </button>
                        </td>
                    </tr>
                </table>
                <button class="custombutton btn-sm offset-10  bg-warning  col-2"><a href="../View/addAuthor.php" class="fw-bold text-dark">ADD AUTHOR</a></button>
            </div>
        </div>
    </div>
    
</body>

</html>