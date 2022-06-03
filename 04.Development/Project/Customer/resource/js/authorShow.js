$(document).ready(function () {
    //initaially show all authors
    showAllAuthor(" ");
    //show all authors on clicking "ALL"
    $("#allAuthor").click(function () {
      $startName = " ";
      showAllAuthor($startName);
    });
  
    //show specific authors on clicking individual letters
    $(".showByLetterIncluding").click(function () {
      $startName = $(this).text();
      showAllAuthor($startName);
    });
    //show all authors function
    function showAllAuthor($startName) {
      var name = $startName;
      $.ajax({
        type: "post",
        url: "../Controller/authorNameSearchController.php",
        data: "name=" + name,
        success: function (data) {
          let json = JSON.parse(data);
          console.log(json);
          $(".authorsCard").remove();
          for (const author of json) {
            $("#authorContainer").append(
              `
                  <div class="authorsCard d-flex flex-column justify-content-center align-items-center mx-4 my-3 gap-3">
                  <img src="../resource/img/authors/${author.author_image}" alt="" width="50%" height="45%" class="mt-2">
                  <p class="authorName fw-bolder">${author.author_name} </p>
                  <button type="button" class="btn authorInfoButton" id="author${author.id}">Read Profile</button>
                  </div>
                  `
            );
          }
        },
      });
    }
  });
  