$(document).ready(function(){

	$('main h3').hide();
	$('main section').show();

	var main = $('main').offset();
	var section = $('.about-me').offset();

	$('h1,h2,button').fadeIn(2000);

	$(document).scroll(function()
	{

		if($(document).scrollTop()*2 > main.top)
		{
		 	$('main h3,.about-me').fadeIn(1000);
		}
		else if($(document).scrollTop()*2 < main.top)
		{
			$('main h3,.about-me').fadeOut(1000);
		}
	});

	$('.icon-wrapper').mouseenter(function()
	{
		$('.icon-wrapper').animate({  borderSpacing: -90 }, 
		{
	    	step: function() 
	    	{
		      $(this).css('transform','rotateX(180deg)');
	    	}
	    })
	});	

});
