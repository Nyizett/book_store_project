<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Privacy Policy</title>
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/Add-faq.css" />
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../resource/js/setting.js"></script>
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="container-fluid mt-5">
<button class="custombutton btn btn-sm offset-4 fw-bold">BACK</button>
<div class="row offset-4">
<form action="../Controller/updatePrivacyPolicyController.php" method="POST">
<div class="col-5 mt-3">
<input type="hidden" name="id" value ="<?php require_once "../Controller/editPrivacyPolicyController.php";  echo $result[0]['id'];?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="email" class="customstyle form-control" value="<?php echo $result[0]['pp_tilte'];?>" id="exampleFormControlInput1" name="editpptt">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Paragraph</label>
  <textarea class="customstyle form-control" id="exampleFormControlTextarea1" rows="3" name="editpppg"><?php echo $result[0]['pp_paragraph'];?></textarea>
</div>

<button class="custombutton btn btn-sm offset-10 mt-3">SAVE</button>

</div>
</form>
</div>
</div>
</body>
</html>