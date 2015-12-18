@extends('layouts.master')

@section('section')
	<h1>Loris Tujiba</h1>
	<h2>Web Developer</h2>
	<button>Let's talk</button>
@endsection

@section('main')
	<h3>Who is Loris ?</h3>
	<section class="about-me">
		<article>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</article>
	</section>
	<section class="contact-me">
		<h3>Contact Me</h3>
		<form action="" method="">
			<fieldset>
				<input type="email" placeholder="email" required="required"/>
				<textarea cols="60" rows="5" placeholder="Your message here..." required="required"></textarea>
			</fieldset>
			<input type="submit" value="Send"/>
		</form>
	</section>	
@endsection
