$(document).ready(function () {
  var getJson = localStorage.getItem("user");
  if (getJson) {
    arrayName = JSON.parse(getJson);
    $("#usernameInput").val(arrayName.user_name);
    $("#emailInput").val(arrayName.user_email);
    // $("#passwordInput").val(arrayName.user_name);
    $("#phoneInput").val(arrayName.user_phone);
    $("#addressInput").val(arrayName.user_address);
  }

  $("#signUpForm").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "../Controller/profileUpdateController.php",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (res) {
        console.log(res);
        // if (res != 1) {
        //   Swal.fire({
        //     position: "center",
        //     icon: "success",
        //     title: "Updated",
        //     timer: 5000,
        //   });
        // } else {
        //   Swal.fire({
        //     icon: "error",
        //     title: "Oops...",
        //     text: "Your email already has been created!",
        //   });
        //   $("#emailInput").css("border-color", "red");
        // }
      },
      error: function (err) {
        console.log(err);
      },
    });
  });
});
