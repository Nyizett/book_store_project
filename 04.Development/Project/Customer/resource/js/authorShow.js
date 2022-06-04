$(document).ready(function () {
  //initaially show all authors
  showAllAuthor("");
  //show all authors on clicking "ALL"
  $("#allAuthor").click(function () {
    $startName = "";
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
        $(".authorsCard").remove();
        let authorsCount = json.length;
        if (authorsCount <= 0) {
          $("#authorContainer").append(
            `
            <div class="authorsCard noAuthor d-flex flex-column justify-content-center align-items-center mx-4 my-3 gap-3">
                  <h4>There is no author with the name "${name}".</h4>
                  </div>
                  `
          );
        } else {
          for (const author of json) {
            $("#modalContainer").append(
              `
              <div class="modal fade" id="authorInfo${author.id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header m-auto">
               <h5 class="modal-title author" id="exampleModalLabel">${author.author_name}</h5>
            </div>
            <div class="modal-body d-flex flex-row">
               <img src="../../Admin/resource/img/authors/${author.author_image}" width="40%" height="150vh" alt="${author.author_name} Photo">
               <p class="ms-4">${author.author_bio}</p>
            </div>
         </div>
      </div>
   </div>
              `
            );
            $("#authorContainer").append(
              `
                    <div class="authorsCard d-flex flex-column justify-content-center align-items-center mx-4 my-3 gap-3">
                    <img src="../../Admin/resource/img/authors/${author.author_image}" alt="${author.author_name} Photo" width="50%" height="45%" class="mt-2">
                    <p class="authorName fw-bolder">${author.author_name} </p>
                    <button type="button" class="btn authorInfoButton" id="${author.id}" data-bs-toggle="modal" data-bs-target="#authorInfo${author.id}">Read Profile</button>
                    </div>
                    `
            );
          }
        }
      },
    });
  }
});
