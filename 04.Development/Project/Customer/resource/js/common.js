
$(document).ready(function () {
  $("#cum_navbar").load("./common.html");
  $("#cum_navbar").load("/Project/Customer/View/common.html");
  getCategories();
  checkLoggedIn();
  function getCategories() {
    $.ajax({
      type: "post",
      url: "../Controller/categoriesGetController.php",
      success: function (data) {
        let json = JSON.parse(data);
        for (const categories of json) {
          $("#categoriesShowDropdown").append(
            `
            <li><a class="dropdown-item" href="../View/categories.php?id=${categories.id}">${categories.category_name}</a></li>
            `
          );
        }
      },
    });
  }
  function checkLoggedIn() {
    if (localStorage.getItem("user") === null) {
      $("#userLoginSignup").append(
        `
        <li><a class="text-dark dropdown-item" href="./signin.php">Signup</a></li>
        
        `
      );
    } else {
      // var userProfile = JSON.parse(localStorage.getItem("user"));
      // console.log(userProfile);
      //
      $("#userLoginSignup").append(
        `
        <li><a class="text-dark dropdown-item" href="./userProfile.php">User Profile</a></li>
        <li><a class="text-dark dropdown-item" id="logout">Logout</a></li>
        `
      );
    }
  }
  $("#logout").click(function () {
    localStorage.removeItem("user");
    window.location.href = `../../Customer/View/homepage.php`;
  });
});
