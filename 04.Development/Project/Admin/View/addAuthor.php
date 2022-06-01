<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Author</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/dashboard.css" />
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
            <!-- Insert Author -->
            <div class="col-8 offset-3">
                <button class="custombutton btn btn-sm mt-4 col-1 ms-4"><a href="../View/authorInfo.php" class="fw-bold text-dark text-wrap">Back</a></button>
                <p class="h3 mt-4 ms-4">Insert Author</p>
                <form>
                    <div class="row container col-md-7 mt-3 ">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="email" class="form-control" id="email" name="aut_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pwd" class="form-label">Image</label>
                            <input type="file" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>

                        <label for="comment">Biography</label>
                        <textarea class="form-control ms-2" rows="8" id="comment" name="text"></textarea>
                        
                        <button type="submit" class="custombutton btn fw-bold mt-4 ms-1">Save</button>
                        
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>