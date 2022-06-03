
$(document).ready(function() {
    $('.count').prop('disabled', true);

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
            <p class="mx-3 mb-2 name">Username</p>   
            </div>
            <div class="commentinner review" >${input}</div>
         </div>`
        )
        $('#inputtextbox').val('');
        $('.userComment').show('slow');
    
    })
});


