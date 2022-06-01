<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Shop</title>
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
        <div id="navbar" class="my-nav"></div>
            <!--Input Box for Editting Shop-->
            <div class="col-8 offset-3">
                <button class="custombutton btn mt-4 col-1 ms-4"><a href="../View/shopInfo.php" class="col-1 text-dark fw-bold">Back</a></button>
                <form>
                    <div class="row container col-md-8 mt-3 ">
                        <div class="row">
                            <div class="col mb-3 mt-3">
                                <label for="email" class="form-label">Shop</label><br>
                                <select name="" id="">
                                    <option value="Yangon">Yangon</option>
                                    <option value="Mandalay">Mandalay</option>
                                    <option value="Nay Pyi Taw">Nay Pyi Taw</option>
                                </select>
                            </div>
                            <div class="col mb-3 mt-3 ms-4">
                                <label for="pwd" class="form-label">Name</label>
                                <input type="text" class="form-control" id="pwd" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label">Phone</label>
                                <input type="email" class="form-control" id="email" name="">
                            </div>
                            <div class="col mb-3 mt-3 ms-4">
                                <label for="pwd" class="form-label">Website</label>
                                <input type="text" class="form-control" id="pwd" name="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3 mt-3 ">
                                <label for="email" class="form-label">Image</label>
                                <input type="file" class="form-control" id="email" name="">
                            </div>
                        </div>
                        <div class="row">
                            <label for="comment">Address</label>
                            <textarea class="form-control ms-2" rows="8" id="comment" name="text"></textarea>
                        </div>
                        <button type="submit" class="custombutton btn fw-bold mt-4">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>