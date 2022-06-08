<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Author</title>
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
                <button class="custombutton btn btn-sm mt-4 col-1 ms-4"><a href="../View/authorInfo.php" class="text-dec fw-bold text-dark text-wrap">Back</a></button>
                <p class="h3 mt-4 ms-4">Edit Author</p>
                <form action="../Controller/updateDBAuthorController.php" method="POST">
                    <div class="row container col-md-7 mt-3 ">
                        <div class="mb-3 mt-3">
                            <input type="hidden" name="id" value ="<?php require_once "../Controller/editAuthorController.php";  echo $result[0]['id'];?>">
                            <label for="" class="form-label">Name</label>
                            <input type="text" value="<?php  echo $result[0]['author_name'];?>" class="form-control" name="autName">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="pwd" class="form-label">Image</label>
                            <input type="file" value="<?php echo $result[0]['author_image'];?>" class="form-control" name="autImage">
                        </div>

                        <label for="comment">Biography</label>
                        <textarea class="form-control ms-2" rows="8"  name="autBio"><?php echo $result[0]['author_bio'];?></textarea>
                        
                        <button type="submit" class="custombutton btn fw-bold mt-4 ms-1">SAVE</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>