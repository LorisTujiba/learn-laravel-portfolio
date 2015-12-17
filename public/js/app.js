$(document).ready(function(){
	var main = $('main').offset();
	var topInterval = $(document).scrollTop();

	$('h1,h2,button').fadeIn(2000);

	$(document).scroll(function()
	{
		if(topInterval*2 > main.top)
		{
		 	$('main h3').fadeIn(1000);
		}
		else if(topInterval*2 < main.top)
		{
			$('main h3').fadeOut(1000);
		}
	});
});

//# sourceMappingURL=app.js.map
