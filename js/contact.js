$(function(){
     $("#name").focus(function(){
          $('#name-err').text('');  
    });
    $("#email").focus(function(){
      $('#email-err').text('');  
    });
    
    $("#message").focus(function(){
      $('#message-err').text('');  
    });
    
    $('#send-contact-btn').click(function(){
        var name=$('#name').val();
        var email=$('#email').val();
        var message=$('#message').val();
        if(name=="")
        {
            $('#name-err').text('Field Cannot be leave blank');
            return false;
        }
        else if(email=="")
        {
            $('#email-err').text('Field Cannot be leave blank');
            return false;
        }
        else if(message=="")
        {
            $('#message-err').text('Field Cannot be leave blank');
            return false;
        }
        if(message.length>21845)
        {
            $('#message-err').text('message is too long');
            return false;
        }
        $.ajax({
            type:'post',
            url:'contactus_action.php',
            data:{name:name,email:email,message:message},
           
            success:function(data)
            { 
                if(data==0)
                {
                    $('#email').val("");
                    $('#email-err').text('Please Enter a Valid Email Id');
                    $('#success-msg').text('');
                    return false;
                }
                else
                {
                    $('#email-err').text('');
                    $('input[type=text], textarea').val('');
                    alert('Thank You For Your Response!!!');
                }
            }
        });
    });

});