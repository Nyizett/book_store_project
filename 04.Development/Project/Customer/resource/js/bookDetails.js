
$(document).ready(function() {
    $('.count').prop('disabled', true);


    let userinfo;
    if(localStorage.getItem('user') != null){
         userinfo = JSON.parse(localStorage.getItem('user'));
         console.log(userinfo);
        $('.reviews').prepend(`
        <div class="col-md-7 ">

        <div class="col-md-12">
           <p class="titles commom-bg">Review</p>
        </div>
        <div class="col-md-12">
           <div class="commentbox">
              <div class="commentboxheader">
                 <p class="QuestionHeader">Review About This Product</p>
              </div>
              <div class="commentbody">

              </div>
              <div class="commentinput mt-4">

                 <input type="text" class="inputtextbox" id="inputtextbox" placeholder="Please Type here..." />
                 <button class="sendbutton">
                    Post Your Review
                 </button>
              </div>

           </div>


        </div>
     </div>`);
    }
    
    $(document).on('click', '.plus', function() {

        if ($('.counts').val() < 9) {
            $('.counts').val(parseInt($('.counts').val()) + 1);

        }
        console.log($('.counts').val());
    });
    $(document).on('click', '.minus', function() {
        $('.counts').val(parseInt($('.counts').val()) - 1);
        if ($('.counts').val() == 0) {
            $('.counts').val(1);
        }
    });

    $('.sendbutton').click(function(){

       let input = $('#inputtextbox').val();
       console.log(input);
        $('.commentbody').append(
            ` <div class="userComment">
            <div class="user d-flex ">
            <i class="fa-solid fa-user mt-1 "></i>
            <p class="mx-3 mb-2 name">${userinfo['user_name']}</p>   
            </div>
            <div class="commentinner review" >${input}</div>
         </div>`
        )
        $('#inputtextbox').val('');
        $('.userComment').show('slow');
    
    })


    $('.cartbtn').click(function(){
        let books = [];
     let book = [];
        let image = $('.bookimage').attr('src').substr(-13);
        
            let data ={
                "id" : id,
                "book_image" : image,
                "book_name" : $('.booknames').text(),
                "book_price" : $('.bookprices').text().replaceAll(',','').replaceAll(' MMK',''),
                "author_name" : $('.authors').text(),
                "qty"  : $('#qty').val()


            }
            
                book.push(data);
                books.push(book);
  if(localStorage.getItem('user') != null){
    
    let user =  JSON.parse(localStorage.getItem('user'));
    let deliver ={
        "address" : user['user_address']
        
    };
    window.location.href = `../../Customer/Controller/cartListController.php?data=${JSON.stringify(books)}&address=${JSON.stringify(deliver)}`;
  }else{
 
    let deliver = {
      "address" : "Default"
    }
    window.location.href = `../../Customer/Controller/cartListController.php?data=${JSON.stringify(books)}&address=${JSON.stringify(deliver)}`;
  }
        
    });

    
});


