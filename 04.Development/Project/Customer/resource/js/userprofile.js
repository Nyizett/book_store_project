$(document).ready(function () {
  var getJson = localStorage.getItem("user");
  var userid;
  if (getJson) {
    arrayName = JSON.parse(getJson);
    $("#usernameInput").val(arrayName.user_name);

    // $("#passwordInput").val(arrayName.user_name);
    $("#phoneInput").val(arrayName.user_phone);
    $("#addressInput").val(arrayName.user_address);
    userid = arrayName.id;
  } else {
    alert("Login First");
    window.location.href = "../../Customer/View/homepage.php";
  }

  $("#signUpForm").on("submit", function (e) {
    e.preventDefault();
    var userName = $("#usernameInput").val();
    var userPhone = $("#phoneInput").val();
    var userAddress = $("#addressInput").val();
    let idData = {
      userid: userid,
      username: userName,
      userphone: userPhone,
      useraddress: userAddress,
    };
    $.ajax({
      type: "post",
      url: "../Controller/profileUpdateController.php",
      data: { send: JSON.stringify(idData) },
      success: function (res) {
        let responData = JSON.parse(res);
        console.log(res);
        localStorage.setItem("user", JSON.stringify(responData[0][0]));
      },
      error: function (err) {
        console.log(err);
      },
    });
    location.reload();
    // window.location.href = "../../Customer/View/homepage.php";
  });
});
