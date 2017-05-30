
// gnavi_icon
$(document).ready(function(){
	"use strict";
	$('#nav-icon4,.close').click(function(){
	$('#nav-icon4').toggleClass('open');
	$("#gnavi_sp").stop(1,1).slideToggle();	
	
	});
});

function total_h(){
	"use strict";
	var h_window = $(window).height();
	var h_head = $("#header").height();
	var h_GlobalNav =  h_window - h_head;
	$("#gnavi_sp").css("height",h_GlobalNav);	
}
$(window).bind('load resize',function(){
	"use strict";
	total_h();
});	

$(window).bind('load',function(){
	"use strict";
	if($(window).width() < 640){
	$(".sub .btn_sub").click(function(){
			$(this).parent().find(".sub_menu").stop(1,1).slideToggle();
			$(this).parent().toggleClass('rotate');
		});
	}
	
});












