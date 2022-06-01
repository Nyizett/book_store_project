<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/shopInfo.css" />
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
            <!-- Navbar Start -->
            <div id="navbar" class="my-nav"></div>
            <!--User List-->
            <div class="col-8 offset-3">
                <p class="h3 mt-4">User List</p>
                <table class="table table-striped mt-4">
                    <tr>
                    <tr class="bg-warning">
                        <th class="col-1">No</th>
                        <th class="col-2">Name</th>
                        <th class="col-3 ">Email</th>
                        <th class="col-2 ">Phone</th>
                        <th class="col-4">Address</th>
                        <th>Ban</th>
                    </tr>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>helloJohn</td>
                        <td>john123@gmail.com </td>
                        <td>09-202334456 <br>
                            09-202334457
                        </td>
                        <td>No.7B,Kamayut Township</td>
                        <td>
                            <button class="btn-danger fs-3">
                            <ion-icon name="remove-circle-outline" class="fs-4"></ion-icon>
                            </button> 
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>helloMary</td>
                        <td>john123@gmail.com </td>
                        <td>09-202334456 <br>
                            09-202334457
                        </td>
                        <td>No.7B,Kamayut Township</td>
                        <td>
                            <button class="btn-danger fs-3">
                            <ion-icon name="remove-circle-outline" class="fs-4"></ion-icon>
                            </button> 
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>helloNora</td>
                        <td>john123@gmail.com </td>
                        <td>09-202334456 <br>
                            09-202334457
                        </td>
                        <td>No.7B,Kamayut Township</td>
                        <td>
                            <button class="btn-danger fs-3">
                            <ion-icon name="remove-circle-outline" class="fs-4"></ion-icon>
                            </button> 
                        </td>
                    </tr>
                    
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>