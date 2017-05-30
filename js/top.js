
$(document).ready(function(){
        var currentWindow   =   $(window).width();
        if(currentWindow > 640) {
            $('#index_slider').bxSlider({
              mode: 'fade',
              speed: 1000,
              pager: false,
              controls: false,
              adaptiveHeight: true,
              auto: true,
              pause: 5000
          });
        } else {
            $('#index_slider').bxSlider({
          mode: 'fade',
          speed: 1000,
          pager: false,
          controls: false,
          auto: true,
          pause: 5000
      });
        }
	  
	  
	  
	});
