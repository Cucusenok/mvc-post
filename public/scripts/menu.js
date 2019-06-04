var menu_icon = false;

(function($){
  $(function() {
    $('.menu__icon').on('click', function() {
      $(this).closest('.menu').toggleClass('menu_state_open');
    });
  });
  
  
  
    $(function() {
    $('#menu_icon_id').on('click', function() {
		console.log("menu_icon");
		menu_icon=true;
    });
  });
  
  $(function() {
    $(document.body).on('click', function() {
        //body_click=true;
		if( $("#menu_id").hasClass("menu_state_open") && menu_icon!=true){
			console.log("menu");
			console.log(menu_icon);
		    $("#menu_id").removeClass('menu_state_open'); 
		}
		menu_icon=false;
		console.log("not menu");
		//$(this).closest('.menu').toggleClass('menu_state_open');
    });
  });
  
  

})(jQuery);