var ctx = document.getElementById("skill-Chart").getContext("2d");
var data = {
    labels: ["ASP","JSP","PHP", "XHTML", "CSS", "JavaScript", "Jquery", "SQL", "Laravel", "Codeigniter", "Hibernate", "Photoshop"],
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(105,97,255,0.3)",
            strokeColor: "#a8ff61",
            pointColor: "#ffb861",
            pointStrokeColor: "#ffa12e",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [32,77,72, 84, 85, 70, 62, 52, 79, 22, 57, 66]
        }
    ]
};


function create()
{	
	var chart = new Chart(ctx).Radar(data);
}

function postMessage()
{
	$("#output").empty();
	$.ajax(
	{
	    url: '/postMessage',
	    type: 'POST',
	    data: {
	    	'gresponse' : grecaptcha.getResponse(),
	    	'email' : $('#email').val(),
	    	'message' : $('#message').val()
	    },
	    dataType: 'JSON',
	    success: function (data)
	    {
	    	if(data.notice == 'success')	  
	    	{  		
	    		$("#output").append("<h3>Thank you!</h3><h4>Your message has been delivered</h4>");	        
	    		$('#postMessage').reset();
	    	}
	    	else
	    	{
	    		$("#output").append("<h3>Fail to Send</h3><h4>Sorry your messages does not fulfil certain condition</h4>");	        
	    		$('#postMessage').reset();
	    	}
    	}
	});
}

var onloadCallback = function() {
	a = grecaptcha.render('response', {
	  'sitekey' : '6LekghMTAAAAAOFHeQbBO2bYXQDz2awEwgSnDNp9'
	});
};

$(document).ready(function(){

	$(".fancybox").fancybox({'width':400,
                         'height':120,
                         'autoSize' : false});

	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	  }
	});

	var skills = $('.skills').offset();
	var section = $('.about-me').offset();	
	var experience = $('.experiences').offset();	
	var contact = $('.contact-me').offset();	
	var main = $('main').offset();	
	var i = 0;

	$('.nav-about-me').click(function(e)
	{
		e.preventDefault();

        $("body, html").animate({ 
            scrollTop: main.top
        }, 600);
	});

	$('.nav-experiences').click(function(e)
	{
		e.preventDefault();

        $("body, html").animate({ 
            scrollTop: experience.top
        }, 600);
	});

	$('.nav-skills').click(function(e)
	{
		e.preventDefault();

        $("body, html").animate({ 
            scrollTop: skills.top
        }, 600);
	});	

	$('.nav-contact').click(function(e)
	{
		e.preventDefault();

        $("body, html").animate({ 
            scrollTop: contact.top
        }, 600);
	});	

	$('main h3').hide();
	$('main section').hide();
	$('h1,h2,button').fadeIn(2000);

	$(document).scroll(function()
	{

		if($(document).scrollTop()*2 > main.top)
		{
		 	$('main h3, main section').fadeIn(1000);
		}
		else if($(document).scrollTop()*2 < main.top)
		{
			$('main h3, main section').fadeOut(1000);
		}
		if($(document).scrollTop()+200 > skills.top)
		{						
			if(i==1)
			{
				create();
				i=3;
			}
			else if(i==0)
			i++;
		}
	});	
});



//# sourceMappingURL=app.js.map
