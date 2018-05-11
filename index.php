<!Doctype HTML>
<head>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/portofolio.css"> 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">
	<header>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<a class="nav-link navbar-brand" href="#">Portofolio Website</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse navbar-right" id="collapsibleNavbar">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link navbar-brand" href="#about">About</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link navbar-brand" href="#portofolio">Portofolio</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link navbar-brand" href="#contact">Contact</a>
			      </li>    
			    </ul>
			  </div>  
		</nav>
	</header>

	<!--Main Body-->
	<section  class="jumbotron">

		<!--About Me-->
		<section>
			<div class="introduction bg-info" style="text-align:center;">	
				<h1>Faizal Adhitama Prabowo</h1>
				<img src="assets/img/photo.jpg" class="img-fluid img-thumbnail" width="200" height="200" alt="My Photo"/>
				<h2>Backend Developer</h2>
			</div>
			<div class="row" id="about">
				<div class="about bg-secondary col-md-8">
					<h2 class="text-center">Personal Information</h2>
					<div class="skills">
						<h3>Skills</h3>
						<div class="skill-list about-list"> 
							<ul>
								<li>Python 3.6</li>
								<li>Django Framework</li>
								<li>TDD
									<ul>
										<li>Unit Testing (Pytest, JUnit)</li>
										<li>Functional Testing (Selenium)</li>
										<li>Coverage 100%</li>
										<li>Code Linter</li>
										<li>Code Review</li>
										<li>CI/CD</li>
									</ul>
								</li>
								<li>Scrum</li>
								<li>Java SE 8</li>
								<li>JavaScript</li>
								<li>PHP 7</li>
								<li>SQL (MySQL, PostgreSQL)</li>
								<li>Flask</li>
								<li>ExpressJS</li>
								<li>NodeJS</li>
							</ul>
						</div>
					</div>
					<div class="educations">
						<h3>Education</h3>
						<div class="education-list about-list">
							<ul>
								<li>
									University of Indonesia</br>
									2015 - Present
								</li>
							</ul>
						</div>
					</div>
					<div class="courses">
						<h3>Courses</h3>
						<div class="course-list about-list">
							<ul>
								<li>Foundations of Programming</li>
								<li>Discrete Mathematics</li>
								<li>Fundamental of Physics</li>
								<li>Calculus</li>
								<li>Data Structure and Algorithm</li>
								<li>Linear Algebra</li>
								<li>Introduction to Digital Systems</li>
								<li>Introduction to Computer Organization</li>
								<li>Web Design and Programming</li>
								<li>Statistics and Probability</li>
								<li>Research Methodology and Scientific Writing</li>
								<li>Database</li>
								<li>Advanced Programming</li>
								<li>Operating Systems</li>
								<li>Theory of Languages and Automata</li>
								<li>Computer Networks</li>
								<li>Functional Programming</li>
								<li>System Programming</li>
								<li>Computer Aided Instruction</li>
								<li>Software Engineering</li>
								<li>Intelligent Systems</li>
							</ul>
						</div>
					</div>
					<div class="works">
						<h3>Work Experiences</h3>
						<div class="work-list about-list">
							<ul>
								<li>Kakak Asuh Web Programming and Design - 4 Month (Sept 2017 - Dec 2017) - Lembaga Asistem Fasilkom UI</li>
								<li>Game Developer Intern - 3 month (Dec 2017 - Feb 2018) - Nemob</li>
								<li>Kakak Asuh Software Engineering and Intelligent Systems - 4 Month (Feb 2018 - June 2018) - Lembaga Asistem Fasilkom UI</li>
							</ul>
						</div>
					</div>
					<div class="committees">
						<h3>Committees</h3>
						<div class="committee-list about-list">
							<ul>
								<li>Academic Staff - 2016 - Comunity Development BEM Fasilkom UI</li>
								<li>Logistic Staff - 2016 - Rumbel BEM UI</li>
								<li>Mentor of OKK UI - 2016 - BEM UI</li>
								<li>Logistic Staff - 2017 - Even Term Graduation BEM Fasilkom UI</li>
							</ul>
						</div>
					</div>
					<div class="volunteers">
						<h3>Volunteers</h3>
						<div class="volunteer-list about-list">
							<ul>
								<li>SBMPTN TPA Teacher - 2017 - BETIS Fasilkom UI</li>
								<li>SBMPTN Student Mentor - 2017 - BETIS Fasilkom UI</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="quote col-md-4">
					<h2 class="text-center">Random Quote</h2>
					<blockquote class="blockquote">
						<p class="mb-0"></p>
						<footer class="blockquote-footer">
							<cite title="Source Title">
								
							</cite>
						</footer>
					</blockquote>
				</div>
			</div>
		</section>

		<!--My Works-->
		<section id="portofolio" class="text-center">
			<h2>Portofolio</h2>
			<div id="demo" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
					<li data-target="#demo" data-slide-to="3"></li>
				</ul>

			    <div class="carousel-inner">
					<div class="carousel-item active">	
						<img src="assets/img/catur-jawa.png" id="catur-jawa-img" alt="Catur Jawa" witdh="600" height="600" class="img-fluid"/>
					</div>
					<div class="carousel-item">
						<img src="assets/img/prima.png" id="prima-img" alt="Prima" witdh="600" height="600" class="img-fluid"/>
					</div>
					<div class="carousel-item">	
						<img src="assets/img/hospital-searcher.png" id="hospital-searcher-img" alt="Hospital Searcher" witdh="600" height="600" class="img-fluid"/>
					</div>
					<div class="carousel-item">
						<img src="assets/img/alarm-bot.png" id="alarm-bot-img" alt="Alarm Bot" witdh="600" height="600" class="img-fluid"/>
					</div>
				</div>

				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				
				<!-- The Modal -->
				<div class="modal" id="catur-jawa-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								Modal body..
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>

				<!-- The Modal -->
				<div class="modal" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								Modal body..
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>

				<!-- The Modal -->
				<div class="modal" id="prima-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								Modal body..
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>

				<!-- The Modal -->
				<div class="modal" id="hospital-searcher-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								Modal body..
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>

				<!-- The Modal -->
				<div class="modal" id="alarm-bot-modal">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Modal Heading</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								Modal body..
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
	
	<!--Contact-->
	<footer id="contact" class="jumbotron container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<h4>Article and Repository</h4>
				<h6>My Software Engineering Article</h6>
				<a href="https://medium.com/@faizaladhitama" target="_blank"><img src="assets/img/medium.png" class="img-fluid" alt="Medium" height="42" width="42" /></a>
				<h6>My Public Repository</h6>
				<a href="https://github.com/faizaladhitama" target="_blank"><img src="assets/img/github.png" class="img-fluid" height="42" width="42" alt="Github"/></a>

			</div>
			<div class="col-md-6 col-sm-6">
				<h4>Contact me</h4>
				<a href="https://api.whatsapp.com/send?phone=6282210491890&text=Hello%20Faizal,%20I%20would%20like to%20know%20more%20about%20your%20project" target="_blank"><img src="assets/img/whatsapp.png" class="img-fluid" height="42" width="42" alt="Whatsapp"/></a>
				<a href="https://linkedin.com/in/faizaladhitama" target="_blank"><img src="assets/img/linkedin.png" class="img-fluid" height="42" width="42" alt="Linkedin"/></a>
				<h5>Phone : +6282210491890</h5>
				<h5>Email : faizaladhitamaprabowo@gmail.com</h5>
			</div>
		</div>
		<div class="text-center">
			2018 © Faizal Adhitama Prabowo.
		</div>
	</footer>
</body>