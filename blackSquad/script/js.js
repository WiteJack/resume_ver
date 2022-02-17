$(document).ready(function() {
	$('#menu1').addClass('active')});
$(document).ready(function() {
	$('.btn').click(function(event) {
		$('.menu').removeClass('active');
		let num = $(this).attr('data-num');
		$('#menu'+num).addClass('active');
        $('.btn').removeClass('active');
        $('.btn'+num).addClass('active');
        $('.textt').remove();
	});
});


$(document).ready(function() { 
    let button = $('#button-up');	
    $(window).scroll (function () {
      if ($(this).scrollTop () > 300) {
        button.fadeIn();
      } else {
        button.fadeOut();
      }
  });	 
  button.on('click', function(){
  $('body, html').animate({
  scrollTop: 0
  }, 800);
  return false;
  });		 
  });