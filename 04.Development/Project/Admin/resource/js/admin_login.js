$(document).ready(function () {
  if (localStorage.getItem("name")) {
    $("#name").val(localStorage.getItem("name"));
  }

  $("#lgbtn").click(function () {
    var username = $("#name").val();

    localStorage.setItem("name", username);
     
  });
});
