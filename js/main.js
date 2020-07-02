//1. Logo Animatation
$(function(){
    
    $('.tlt').fadeIn(1000);
      
      
});
$(function () {
    $('.tlt').textillate({ in: { 
            effect: 'bounceInDown' ,
            minDisplayTime: 8000,
        
        }  });
    
})

$(function(){
    
    $('.tlt').fadeOut(8000);
});

//2. Tagline 

$(function(){
    
    $('.tagline').fadeIn(1000);
});
$(function(){
    
    $('.tagline').textillate({ in: { 
            effect: 'bounceInUp' ,
            minDisplayTime: 8000,
        
        }  });
  
});

$(function(){
    
    $('.tagline').fadeOut(5000);
    $('#logo_landing').delay(5000).hide(1000);  
});



$(function(){
    
    $('.tagline-small').fadeIn(1000);
});
$(function(){
    
    $('.tagline-small').textillate({ in: { 
            effect: 'bounceInUp' ,
            minDisplayTime: 8000,
        
        }  });
});

$(function(){
    
    $('.tagline-small').fadeOut(5000);
    $('#logo_landing').delay(5000).hide(1000);  
});

//3. quotes for large device
$(function(){
    $('#q1_l').delay(9000).fadeIn(1000);
});

$(function(){
    $('#q2_l').delay(10000).fadeIn(1000);
});

$(function(){
    $('#q3_l').delay(11000).fadeIn(1000);
});

$(function(){
    $('#q4_l').delay(12000).fadeIn(1000);
});



//4. quotes for medium device
$(function(){
    $('#q1_m').delay(9000).fadeIn(1000);
});

$(function(){
    $('#q2_m').delay(10000).fadeIn(1000);
});

$(function(){
    $('#q3_m').delay(11000).fadeIn(1000);
});

$(function(){
    $('#q4_m').delay(12000).fadeIn(1000);
});


//5. quotes for small device
$(function(){
    $('#q1_s').delay(9000).fadeIn(1000);
});

$(function(){
    $('#q2_s').delay(10000).fadeIn(1000);
});

$(function(){
    $('#q3_s').delay(11000).fadeIn(1000);
});

$(function(){
    $('#q4_s').delay(12000).fadeIn(1000);
});
//6 Navigation 



$(function(){
    $('.navigation').delay(11500).slideDown(2000);
    $('.site-footer').delay(11500).fadeIn(2000);
});

//6.1 Navigation 
$(function(){
    $('#about_btn').click(function(){
        $('#aboutus').delay(500).fadeIn(1000);
        $('#vision').fadeOut(500);
        $('#product').fadeOut(1000);
        $('#team').fadeOut(1000);
        $('#contact').fadeOut(1000);
        $('.q_hide').fadeOut(500);
    });
    
    $('#vision_btn').click(function(){
        $('#vision').delay(500).fadeIn(1000);
        $('#aboutus').fadeOut(500);
        $('#product').fadeOut(500);
        $('#team').fadeOut(500);
        $('#contact').fadeOut(500);
        $('.q_hide').fadeOut(500);
    });
    
    $('#product_btn').click(function(){
        $('#product').delay(500).fadeIn(1000);
        $('#vision').fadeOut(500);
        $('#aboutus').fadeOut(500);
        $('#team').fadeOut(500);
        $('#contact').fadeOut(500);
        $('.q_hide').fadeOut(500);
    });
    
    $('#team_btn').click(function(){
        $('#team').delay(500).fadeIn(1000);
        $('#vision').fadeOut(500);
        $('#aboutus').fadeOut(500);
        $('#product').fadeOut(500);
        $('#contact').fadeOut(500);
        $('.q_hide').fadeOut(500);
    });
    
     $('#contact_btn').click(function(){
        $('#contact').delay(500).fadeIn(1000);
        $('#vision').fadeOut(500);
        $('#aboutus').fadeOut(500);
        $('#product').fadeOut(500);
        $('#team').fadeOut(500);
        $('.q_hide').fadeOut(500);
    });
    
    
});






