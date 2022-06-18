

session_start();
@if(session('active')=='true')
{

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Easy Profile Green - templatemo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--
Easy Profile Template
http://www.templatemo.com/tm-467-easy-profile
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="{{ asset('css/profile/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/profile/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/profile/css/templatemo-green.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="{{ asset('css/profile/images/tm-easy-profile.jpg') }}" class="img-responsive img-circle tm-border" alt="templatemo easy profile">
				<hr>
				<h1 class="tm-title bold shadow">Hi, I am Julia</h1>
				<h1 class="white bold shadow">cloud Student</h1>
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">who am I</h3>
				<h2>Bootstrap v3.3.5</h2>
				<p>This easy HTML profile is brought to you by templatemo website. There are 4 color themes, <a href="index-green.html">Green</a>, <a href="index.html">Blue</a>, <a href="index-gray.html">Gray</a>, and <a href="index-orange.html">Orange</a>. Sed vitae dui in neque elementum tempor eu id risus. Phasellus sed facilisis lacus, et venenatis augue.</p>
			</div>
		</div>

	</div>
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">Education</h2>
					<div class="education-content">
						<h4 class="education-title accent">New Web Design</h4>
							<div class="education-school">
								<h5>School of Media</h5><span></span>
								<h5>2030 January - 2034 December</h5>
							</div>
						<p class="education-description">In lacinia leo sed quam feugiat, ac efficitur dui tristique. Ut venenatis, odio quis cursus egestas, nulla sem volutpat diam, ac dapibus nisl ipsum ut ipsum. Nunc tincidunt libero non magna placerat elementum.</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>clinic</h2>
					<ul>
						<li>Myanmar / Thai</li>
						<li>English / Spanish</li>
						<li>Chinese / Japanese</li>
						<li>Arabic / Hebrew</li>
					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>contact</h2>
					<p><i class="fa fa-map-marker"></i> 123 Rama IX Road, Bangkok</p>
					<p><i class="fa fa-phone"></i> 010-020-0890</p>
					<p><i class="fa fa-envelope"></i> easy@company.com</p>
					<p><i class="fa fa-globe"></i> www.company.com</p>
			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
				<h2 class="white">status</h2>
					<div class="experience-content">
						<h4 class="experience-title accent">Website Development</h4>
						<h5>New Media Company</h5><span></span>
						<h5>2035 January - 2036 April</h5>
						<p class="education-description">Cras porta tincidunt sem, in sollicitudin lorem efficitur ut. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright &copy; 2084 Your Easy Profile</p>
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-github"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->
<script src="{{ asset('css/profile/js/jquery.js') }}"></script>
<script src="{{ asset('css/profile/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/profile/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('css/profile/js/custom.js') }}"></script>

</body>
</html>

}@else{
    <script>window.location = "http://localhost/medicalcare/public/login";</script>

}
@endif
session_destroy();
?>
