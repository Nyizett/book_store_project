$(document).ready(function () {

    $('#signUpForm').on('submit', function(e) {
        e.preventDefault();
      
        $.ajax({
            type: "POST",
            url: "../Controller/signupController.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success : function(res){
                console.log(res);
                if( res != 1){

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Successfully!!! Sign Up',
                        timer: 5000
                    })
                    
                    $('#name').val('');
                    $('#email').val('');
                    $('#password').val('');
                    $('#phone').val('');
                    $('#address').val('');
                  
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Your email already has been created!',
                    });
                  $('#email').css('border-color','red');
                }
            },
            error : function(err){
                console.log(err);

            }
           
        });
            
      
})
});;


function changeURL(){
    
}