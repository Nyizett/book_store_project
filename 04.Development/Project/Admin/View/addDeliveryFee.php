<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
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
<form action="../Controller/addDeliveryFeeController.php" method="POST">
<div class="col-5 mt-3">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Write City or Township</label>
  <input type="text" class="customstyle form-control" id="exampleFormControlInput1" name="delicity">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Write Delivery Price</label>
  <input type="type" class="customstyle form-control" id="exampleFormControlInput1" name="deliprice">
</div>

<button type="submit" class="custombutton btn btn-sm offset-10 mt-3 fw-bold">ADD DELIVERY FEE</button>

</div>
</form>
</div>
</div>
</body>
</html>