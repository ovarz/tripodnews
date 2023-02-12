function all_scroll(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};



function back_to_top(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
};



function navtab(){
  "use strict";
  $('.nav-button').click(function(){
	var get_data = $(this).attr('id');
	$(this).addClass('nav-curr');
	$('.nav-button').not(this).removeClass('nav-curr');
	$('.rancak-container').load('page/'+ get_data +'.php');
  });	
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  navtab();
});