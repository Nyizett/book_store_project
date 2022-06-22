var current_page
$(document).ready(function () {
    $.ajax({
        url: "../Controller/authorListController.php",
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
    for (const author of data.slice(start, end)) {
        $("#bookData").append(
            `<tr class='allitems tb-text'>
            <td>${count++}</td>
            <td>${author.author_name}</td>
            <td class='tb-img'> <img src="../resource/img/authors/${author.author_image}"</td>
            <td class="respontd ">${author.author_bio}</td>
            <td><a href='../View/editAuthor.php?id= ${author.id}'><button type='button' class='smBtnn btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>
            <td><a href='../Controller/deleteAuthorController.php?id= ${author.id}'><button type=' button' class='smBtnn btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>
            </tr>`
        )
        }
}
function showPagBtn(row,data,row_per_page){
    for (let index = 1; index < row+1; index++) {
        if(index==1){
            $("#pagbtn").append(`<button type="button" class="activebbtn pagfun btn btn-outline-primary">${index}</button>`)
        }else{
            $("#pagbtn").append(`<button type="button" class="pagfun btn btn-outline-primary">${index}</button>`)
        }
    }
    $(".pagfun").click(function () {
        var npage=$(this).text();
        console.log($(this).text())
        $(".pagfun").removeClass("activebbtn")
        $(this).addClass("activebbtn")
        ShowItem(data,row_per_page,npage)
   });
  
    
}