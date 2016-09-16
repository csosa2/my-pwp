<!DOCTYPE html>

<!--TODO: remove unnessecary links in head
TODO: center jumbotron text
TODO: make nav bar more visible
TODO: flex box (github notes)
TODO: flex image (github notes)
TODO: jquery scroll effects-->

<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- ADD YOUR CUSTOM CSS HERE -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>
		<script src="js/script.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!--FONT AWESOME-->
		<script src="https://use.fontawesome.com/ccafd2629e.js"></script>

		<!--Google Fonts-->
		<link
			href="https://fonts.googleapis.com/css?family=Abril+Fatface|Cardo|Cormorant+Infant|Crimson+Text|Josefin+Sans|Poiret+One|Roboto+Mono|Ubuntu+Condensed"
			rel="stylesheet">

		<title>My Personal Website</title>
	</head>
	<!--Whole Body Container-->
	<body class="sfooter">

		<!-- begin sticky footer content -->
		<div class="sfooter-content">

			<!----------------------------------- HEADER --------------------------------------->

			<header>
				<!------------ BEGIN NAVBAR ------------->
				<nav class="nav-scroll navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand page-scroll">| Sosa Development |</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li><a class="page-scroll" href="#home">Home</a></li>
								<li><a class="page-scroll" href="#about">About Me</a></li>
								<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
								<li><a class="page-scroll" href="#contact">Contact Me</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>

			<!------------------------------- BEGIN MAIN CONTENT ---------------------------------->
			<main>
				<!--<div id="page-top" class="row">
					<div class="col-xs-12">-->
						<div id="home" class="jumbotron text-center">
							<h1>Christina Sosa</h1>
							<p>Web Developer</p>
							<br>
							<i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
						</div>
					<!--</div>
				</div>-->

				<!-------------------------------ABOUT ME-------------------------------------->

				<div id="about" class="container about section">
					<h2 class="heading">About Me</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Hello! My name is Christina and I'm a web developer and founder of Sosa Development. I am a
								former clinical research coordinator who fell in love with learning to code. I am drawn to the
								blend of the technical and the creative. I am growing my skill set daily and enjoy conquering
								new challenges that arise with each unique project.
							</p>
							<p>
								While a coordinator, I became skilled at working with teams and meeting big deadlines. Part of
								my responsibilities included creating online surveys through a platform using HTML and CSS as a
								tool to format the survey. It was then that I discovered my passion for coding and solving
								problems. A couple years later, I was placed on a team at work to help conceptualize and create
								an application. After working with the team of developers to create functional solutions for
								users, I decided that I wanted to pursue this field and attend an intensive coding bootcamp to
								become a Full Stack Web Developer. It was a fantastic experience and I gained so much more than
								just coding skills!
							</p>
							<p>
								I have proven I am a quick learner who can be self-motivated while working independently, as
								well as foster productive working relationships as part of a group. I feel that my ability for
								organization and attention to detail, my communication skills and my love of coding, I can help
								you meet your goal of having a great web application.
							</p>
							<p>
								If you'd like to learn more about me, please see my portfolio below, where you can see examples
								of my previous work.
							</p>
						</div>
						<div class="col-md-6">
							<img class="profile" src="images/profile1.jpeg" alt="profile">
						</div>
					</div>
				</div>

				<!----------------------------------PORTFOLIO------------------------------------->

				<div id="portfolio" class="section">
					<div class="container">
						<h2 class="heading">Portfolio</h2>
						<div class="row"> <!--row flex is not working here; so I didn't include it-->
							<div class="col-md-3">
								<img class="img-responsive portfolio-img" src="images/LogoMakr.png" alt="flek logo">
								<div class="caption">
									<h3>
										Flek
									</h3>
									<p>
										Connecting artists with patrons of local culture and art.
									</p>
								</div>
								<div class="caption-padding">
									<a href="//flek.me" target="_blank"
										class="btn btn-primary" role="button"><i
											class="fa fa-lg fa-external-link"></i></a>
									<a href="//github.com/gsandoval49/flek" target="_blank"
										class="btn btn-default pull-right"
										role="button"><i class="fa fa-lg fa-github"></i></a>
								</div>
							</div>
							<div class="col-md-3">
								<img class="portfolio-img coming-soon" src="images/coming-soon.jpg" alt="coming soon">
								<div class="caption">
									<h3>
										Project
									</h3>
									<p>
										Please check back soon. A fantastic webiste will be launching!
									</p>
								</div>
								<div class="caption-padding">
									<a href="//google.com/" target="_blank"
										class="btn btn-primary" role="button"><i
											class="fa fa-lg fa-external-link"></i></a>
									<a href="//github.com/csosa2" target="_blank"
										class="btn btn-default pull-right"
										role="button"><i class="fa fa-lg fa-github"></i></a>
								</div>
							</div>
							<div class="col-md-3">
								<img class="portfolio-img coming-soon" src="images/coming-soon.jpg" alt="coming soon">
								<div class="caption">
									<h3>
										Project
									</h3>
									<p>
										Please check back soon. A fantastic webiste will be launching!
									</p>
								</div>
								<div class="caption-padding">
									<a href="//google.com/" target="_blank"
										class="btn btn-primary" role="button"><i
											class="fa fa-lg fa-external-link"></i></a>
									<a href="//github.com/csosa2" target="_blank"
										class="btn btn-default pull-right"
										role="button"><i class="fa fa-lg fa-github"></i></a>
								</div>
							</div>
							<div class="col-md-3">
								<img class="portfolio-img coming-soon" src="images/coming-soon.jpg" alt="coming soon">
								<div class="caption">
									<h3>
										Project
									</h3>
									<p>
										Please check back soon. A fantastic webiste will be launching!
									</p>
								</div>
								<div class="caption-padding">
									<a href="//google.com/" target="_blank"
										class="btn btn-primary" role="button"><i
											class="fa fa-lg fa-external-link"></i></a>
									<a href="//github.com/csosa2" target="_blank"
										class="btn btn-default pull-right"
										role="button"><i class="fa fa-lg fa-github"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!------------------------- CONTACT FORM------------------------------------->

				<div id="contact" class="container section">
					<h2 class="heading">Contact Me</h2>
					<div class="row">
						<div class="col-md-3"></div>
						<!--Begin Contact Form-->
						<div class="col-md-6">
							<form id="contact-form" action="php/mailer.php" method="POST" novalidate>
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="5" id="message" name="message"
													 placeholder="Message (2000 characters max)"></textarea>
									</div>
								</div>

								<!-- reCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6Led9SkTAAAAAKHa_JtzYJbmfs_lUQhrE0LufdKm"></div>

								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>
						</div>
						<div class="col-md-3"></div>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<!--------------------------------------- BEGIN FOOTER ------------------------------------>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!--TWITTER ICON-->
						<a href="//twitter.com/SosaWebDev" target="_blank" class="btn btn-social-icon btn-twitter">
							<span class="fa fa-twitter fa-2x"></span>
						</a>
						<!--GITHUB ICON-->
						<a href="//github.com/csosa2" target="_blank" class="btn btn-social-icon btn-github">
							<span class="fa fa-github fa-2x"></span>
						</a>
						<!--LINKEDIN ICON-->
						<a href="//www.linkedin.com/in/christinasosa" target="_blank"
							class="btn btn-social-icon btn-linkedin">
							<span class="fa fa-linkedin fa-2x"></span>
						</a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>