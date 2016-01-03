@extends('layouts.master')

@section('section')
	<h1>Loris Tujiba</h1>
	<h2>Web Developer</h2>
@endsection

@section('main')	
	<section class="about-me">
		<h3>Who is Loris ?</h3>
		<article class="about-me-content">
			<p>
				I'm a student in Bina Nusantara University Majoring in Computer Science and specializing in Software Engineering 
				Currently residing in Jakarta and worked as a laboratory assistant in Bina Nusantara University. 
				I'm also work as a freelancer specially for web development.
			</p>	
			<p>
				If you have a project to offer, you can drop me an email. 
				Feel free to ask me anything you want to, i will be glad enough to help solve your problems.
				And lastly thank you for visiting !
			</p>		
		</article>
		<article class="about-me-content">
			<img src="{{asset('images/aboutme2.png')}}" width="170" height="300"/>
		</article>
	</section>
	<section class="experiences">
		<h3>Experiences</h3>	
		<div class="panel">	
			<div class="subject-item">
				<i class="fa fa-graduation-cap fa-3x"></i>
				<h4>Education</h4>
				<ul>
					<li>
						<h5>SD-1 Yayasan Pupuk Kaltim</h5>
						<h6>Bontang, Kalimantan Timur</h6>
						<h6>2000 - 2006</h6>
					</li>
					<li>
						<h5>SMP Negeri 1 Bontang</h5>
						<h6>Bontang, Kalimantan Timur</h6>
						<h6>2006 - September 2009</h6>
					</li>
					<li>
						<h5>SMA A. Adi Sutjipto Balikpapan</h5>
						<h6>Balikpapan, Kalimantan Timur</h6>
						<h6>2009 - 2012</h6>
					</li>
					<li>
						<h5>Binus University</h5>
						<h6>Jakarta, DKI Jakarta</h6>
						<h6>September 2013 - Present</h6>
					</li>
				</ul>
			</div>
			<div class="subject-item">
				<i class="fa fa-briefcase fa-3x"></i>
				<h4>Job</h4>
				<ul>
					<li>
						<h5>Teaching Assistant</h5>
						<h6>Bina Nusantara</h6>
						<h6>September 2014 - September 2015</h6>
					</li>
					<li>
						<h5>Subject Coordinator</h5>
						<h6>Bina Nusantara</h6>
						<h6>September 2015 - Present</h6>
					</li>
				</ul>
			</div>
			<div class="subject-item">
				<i class="fa fa-users fa-3x"></i>
				<h4>Organization</h4>
				<ul>
					<li>
						<h5>Binus Square Student Comittee</h5>
						<h6>4th Presidency as Member of Staff IT</h6>
						<h6>November 2013 - 2014</h6>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="skills">
		<h3>Skills</h3>	
		<canvas id="skill-Chart" width="1000" height="400"></canvas>

	</section>
	<section class="contact-me">
		<h3>Contact Me</h3>
		<div class="panel">
			<section class="media-social-panel">	
				<a href="http://www.facebook.com/please.typehere" class="icon-wrapper facebook">			
					<i class="fa fa-facebook"></i>				
				</a>
				<a href="mailto:pisceslrz@gmail.com"class="icon-wrapper google-plus">
					<i class="fa fa-envelope"></i>			
				</a>
				<div class="icon-wrapper google-plus">
					<i class="fa fa-google-plus"></i>			
				</div>			
				<a href="https://id.linkedin.com/in/loris-tujiba-35680388" class="icon-wrapper linkedin">					
					<i class="fa fa-linkedin"></i>								
				</a>
			</section>
			<section>
				<h4>Or you can leave a message here</h4>
				<form method="post">
					{{ csrf_field()}}
					<fieldset>
						<input id="email" type="email" name="email" placeholder="email" required="required"/>
						<textarea id="message" cols="60" name="message" rows="5" placeholder="Your message here..." required="required"></textarea>
						<div class="g-recaptcha" data-sitekey="6LekghMTAAAAAOFHeQbBO2bYXQDz2awEwgSnDNp9"></div>
						<span id="output"></span>
					</fieldset>
					<input onclick="postMessage();" type="button" value="Send"/>
				</form>
			</section>
		</div>
	</section>	
@endsection
