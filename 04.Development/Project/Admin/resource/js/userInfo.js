var current_page
$(document).ready(function () {
    $.ajax({
        url: "../Controller/showUserInfoController.php",
        type: "POST",
        data: "name=book" ,
        success: function (res) {
            let json = JSON.parse(res);
            current_page=1;
            let pagrow=parseInt( json.length/10)+1
            showPagBtn(pagrow,json,10,current_page)
            ShowItem(json,10,current_page)
        },
        error: function (err) {
            console.log(err)
        }
        
    })
});
function ShowItem(data,row,page){
    page--;
    $(".allitems").remove();
    var start=row * page; 
    var end=start+ row
    var count=(page*10)+1 ;
    for (const user of data.slice(start, end)) {
        $("#bookData").append(
            `<tr class='allitems tb-text'>
            <td>${count++}</td>
            <td>${user.user_name}</td>
            <td>${user.user_email}</td>
            <td>${user.user_phone}</td>
            <td>${user.user_address}</td>
            <td><a href='../Controller/banUserController.php?id= ${user.id}'><button type='button' class='btn btn-outline-danger'><ion-icon name='remove-circle-outline' class='fs-4'></ion-icon></button></a></td>
            </tr>`
        )
        }
}
function showPagBtn(row,data,row_per_page){
    for (let index = 1; index < row+1; index++) {
        $("#pagbtn").append(`<button type="button" class="pagfun btn btn-outline-primary">${index}</button>`)
        
    }
    $(".pagfun").click(function () {
        var npage=$(this).text();
        console.log($(this).text())
        ShowItem(data,row_per_page,npage)
   });
  
    
}