
$(document).ready(function(){
	var altura = $('.scroll').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
                  $('.scroll').addClass('fixed-top');
                  $('.nav-icons').addClass('iconos-scroll');
                  $('.facebook').addClass('facebook-bg');
                  $('.twitter').addClass('twitter-bg');
                  $('.instagram').addClass('instagram-bg');
                  $('.linkedin').addClass('linkedin-bg');
                  $('.youtube').addClass('youtube-bg');
		} else {
                  $('.scroll').removeClass('fixed-top');
                  $('.nav-icons').removeClass('iconos-scroll');
                  $('.facebook').removeClass('facebook-bg');
                  $('.twitter').removeClass('twitter-bg');
                  $('.instagram').removeClass('instagram-bg');
                  $('.linkedin').removeClass('linkedin-bg');
                  $('.youtube').removeClass('youtube-bg');
		}
      });

      $('#submit').alert('gg nomas');
 
});