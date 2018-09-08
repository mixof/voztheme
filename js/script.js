$( document ).ready(function() {
   
  $(".voz_menu").on("click", function(e){
     $("#menu_content").slideToggle();
     $(".voz_menu .sv_opener").toggleClass("opened");
  });

  $("#result_info .sv_close").on("click", function(e){
  	$("#result_info").fadeOut(function(){
  		$(this).remove();
  	});
  });

  $(".matches_list li").on('click', function(e){
  	   var elem= $(this).next(".party_info");	
     $(elem).toggleClass('open');


     if($(elem).hasClass('open'))
     {     	
     	$('html, body').animate({
        scrollTop: $(elem).offset().top-10
    }, 500);
    return false;
     } 

  });

  $(".party_info").on("click",'.sv_close', function(e){  
     
  	 var elem=$(this).closest(".party_info")

  	 $(elem).toggleClass("open");

 
     if(!$(elem).hasClass('open'))
     {     	    

     	$('html, body').animate({
        scrollTop: $(elem).prev("li").offset().top-10
         }, 300);
   

        return false;
     } 

     
  })

});