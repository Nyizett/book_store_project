<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/setting.css" />
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/js/setting.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">


        <div class="row">
            <div class="col-xl-2 col-md-3 col-sm-4 col-5 buttonbox position-fixed ">

                <div class="h3 text-break mt-4 text-light">Paradise Book </div>
                <div class="h3 text-light">Store</div>
                <div class="btn-group-vertical container mb-4">
                    <button type="button" class="btn btn-light  mt-3">Dashboard</button>
                    <button type="button" class="btn btn-light  mt-3">Book Info</button>
                    <button type="button" class="btn btn-light  mt-3">Author Info</button>
                    <button type="button" class="btn btn-light  mt-3">Shop Info</button>
                    <button type="button" class="btn btn-light  mt-3">User Info</button>
                    <button type="button" class="btn btn-light  mt-3">Order Info</button>
                    <button type="button" class="btn btn-light  mt-3">Community</button>
                    <button type="button" class="btn btn-light  mt-3">Setting</button>
                    <button type="button" class="btn btn-light  mt-3">Log Out</button>

                </div>

            </div>
            <div class="col-xl-8 col-md-7 col-sm-6 col-5 offset-xl-3 offset-md-4 offset-sm-5 offset-6">
                <div class="row mt-4">
                    <button class="btn col-md-2 col-3 offset-md-2 offset-1 overflow-hidden btn-outline-primary">Site Master</button>
                    <button class="btn col-md-2 col-3 offset-md-1 offset-1 overflow-hidden btn-outline-primary">App Master</button>
                    <button class="btn col-md-2 col-3 offset-md-1 offset-1 overflow-hidden btn-outline-primary">Login Master</button>


                </div>
                <div class="offset-md-2 offset-0 mt-5 ">
                    <table class="table table-striped table-sm customtable">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Education</td>
                            <td><button class="btn btn-outline-primary ">
                                    <ion-icon name="create"></ion-icon>
                                </button> <button class="btn btn-outline-danger ms-1">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </button></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Novels</td>
                            <td><button class="btn btn-outline-primary ">
                                    <ion-icon name="create"></ion-icon>
                                </button> <button class="btn btn-outline-danger ms-1">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </button></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Programming</td>
                            <td><button class="btn btn-outline-primary ">
                                    <ion-icon name="create"></ion-icon>
                                </button> <button class="btn btn-outline-danger ms-1">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </button></td>
                        </tr>
                    </table>
                    <button class="btn btn-sm offset-4 custombutton">ADD Category</button>
                </div>


                <div class="mt-5">
                    <table class="table table-striped table-sm">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Guide Paragraph</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="../resource/img/faq.png" alt="" class="customimagesize" /> </td>
                            <td class=" overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem ipsum natus recusandae aut commodi doloremque quis eius dicta accusantium sit,</td>
                            <td><button class="btn btn-outline-primary ">
                                    <ion-icon name="create"></ion-icon>
                                </button> <button class="btn btn-outline-danger mt-1 ">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="../resource/img/faq.png" alt="" class="customimagesize" /> </td>
                            <td class=" overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem ipsum natus recusandae aut commodi doloremque quis eius dicta accusantium sit,</td>
                            <td><button class="btn btn-outline-primary ">
                                    <ion-icon name="create"></ion-icon>
                                </button> <button class="btn btn-outline-danger mt-1 ">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="../resource/img/faq.png" alt="" class="customimagesize" /> </td>
                            <td class=" overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem ipsum natus recusandae aut commodi doloremque quis eius dicta accusantium sit,</td>
                            <td><button class="btn btn-outline-primary ">
                                    <ion-icon name="create"></ion-icon>
                                </button> <button class="btn btn-outline-danger mt-1 ">
                                    <ion-icon name="trash-sharp"></ion-icon>
                                </button></td>
                        </tr>
                    </table>
                    <button class="btn btn-sm offset-10 custombutton">ADD Guide</button>
                </div>

            </div>

        </div>
    </div>

</body>

</html>



