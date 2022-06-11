$(document).ready(function () {
  // $("#cum_navbar").load("./common.html");
  //    $('#cum_navbar').load("/Project/Customer/View/common.html");
  getCategories();
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
});
