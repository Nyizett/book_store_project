<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add FAQs</title>
  <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../resource/css/style.css" />
  <link rel="stylesheet" href="../resource/css/Add-faq.css" />

</head>

<body>
  <div class="container-fluid mt-5">
    <button class="custombutton btn btn-sm offset-4 fw-bold">BACK</button>
    <div class="row offset-4">
      <div class="col-5 mt-3">
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Questions</label>
          <textarea class="customstyle form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Answers</label>
          <textarea class="customstyle form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>


        </div>
        <button class="custombutton btn btn-sm offset-10 mt-3 fw-bold">SAVE</button>

      </div>
    </div>
  </div>
  <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <script src="../resource/js/setting.js"></script>
  <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>