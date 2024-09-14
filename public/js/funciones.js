                
        function setNavbar() {
            if ($(document).scrollTop() > 160) {
                $('.tm-sidebar').addClass('sticky');
            } else {
                $('.tm-sidebar').removeClass('sticky');
            }
        }                  
  
        $(document).ready(function(){
            
            // Single page nav
        $('.tm-main-nav').singlePageNav({
                'currentClass' : "active",
                offset : 20
            });

             setNavbar();
            $(window).scroll(function() {

                setNavbar();
            });
             
            $('.tm-gallery').magnificPopup({
              delegate: 'a', 
              type: 'image',
              gallery: {enabled:true}

            });
        
        });
     
  $(document).ready(function(){
    $(".menu1").sticky({topSpacing:0});
  });

    $(".icon-menu2").click(function(){
    $(".tm-sidebar").toggle(1000);
});

    $(document).ready(function(){
   if ($(window).width() < 980){
         $(".tm-nav-item").click(function(){
    $(".tm-sidebar").hide();
    });
   } 
});    
