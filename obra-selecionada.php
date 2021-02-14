<?php
	

	
	$row = 1;
	if (($handle = fopen("base-obra.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
	        $num = count($data);
	        $row++;
	        for ($c=0; $c < $num; $c++) {
	        	if($data[$c]==$_GET['obra']){
	            	$titulo=$data[1];
	            	$texto=$data[2];
	            	$imagem=$data[3];
	        }
	    	}
	    }
	    fclose($handle);
}




?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<title> Oximil | Nós temos o ar que você precisa!</title>

 	<!--Favicon-->
 	<link rel="icon" href="assets/img/favicon.png" type="image/jpg" />
 	<!-- Bootstrap CSS -->
 	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
 	<!-- Font Awesome CSS-->
 	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
 	<!-- Line Awesome CSS -->
 	<link href="assets/css/line-awesome.min.css" rel="stylesheet">
 	<!-- Animate CSS-->
 	<link href="assets/css/animate.css" rel="stylesheet">
 	<!-- Bar Filler CSS -->
 	<link href="assets/css/barfiller.css" rel="stylesheet">
 	<!-- Flaticon CSS -->
 	<link href="assets/css/flaticon.css" rel="stylesheet">
 	<!-- Owl Carousel CSS -->
 	<link href="assets/css/owl.carousel.css" rel="stylesheet">
 	<!-- Style CSS -->
 	<link href="assets/css/style.css" rel="stylesheet">
 	<!-- Responsive CSS -->
 	<link href="assets/css/responsive.css" rel="stylesheet">

 	<!-- jquery -->
 	<script src="assets/js/jquery-1.12.4.min.js"></script>


 </head>

 <body>

 	<!-- Pre-Loader -->
 	<div id="loader">
 		<div class="loading">
 			<div></div>
 		</div>
 	</div>


 	<!-- Header Area -->

 	<header id="header-3" class="header-area absolate-header">
 		<div class="sticky-area">
 			<div class="navigation">
 				<div class="container">
 					<div class="row">
 						<div class="col-lg-3">
 							<div class="logo">
 								<a class="navbar-brand" href="index.php"><img src="assets/img/logo-white.png" alt=""></a>
 							</div>
 						</div>
 						<div class="col-lg-6">
 							<div class="main-menu">
 								<nav class="navbar navbar-expand-lg">
 									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 										<span class="navbar-toggler-icon"></span>
 										<span class="navbar-toggler-icon"></span>
 										<span class="navbar-toggler-icon"></span>
 									</button>

 									<div style=" white-space: nowrap;" class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
 										<ul class="navbar-nav m-auto">
 											<li class="nav-item">
 												<a class="nav-link active" href="index.php">Home
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 									<!--			<ul class="sub-menu">
 													<li><a href="index.html">Home-Main</a></li>
 													<li><a href="index-2.html">Home-Industry</a></li>
 													<li><a href="index-3.html">Home-Construction</a></li>
 												</ul> -->
 											</li>

 											<li class="nav-item">
 												<a class="nav-link" href="index.php##">Sobre Nós
 												<!--	<span class="sub-nav-toggler">
 													</span> -->
 												</a>
 												<ul class="sub-menu">
 													<li><a href="index.php##historia">Nossa História</a></li>
 													<li><a href="index.php##missao">Missão, Visão e Valores</a></li>
 													<li><a href="index.php##qualidade">Política de Qualidade</a></li>
 												<!--	<li><a href="price.html">Pricing</a></li>
 													<li><a href="faq.html">FAQ</a></li> -->
 												</ul>
 											</li>
 											<li class="nav-item">
 												<a class="nav-link" href="#">Serviços
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="gases-medicinais.html">Gases Medicinais</a></li>
 													<li><a href="gases-industriais.html">Gases Industriais</a></li>
 													
 													<li><a href="obra.html">Instalação de Gases</a></li>
 									<!--				<li><a href="single-service.html">Service Details</a></li> -->
 												</ul>

 											</li>

 											<li class="nav-item">
 												<a class="nav-link" href="index.php#ar">No AR!
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 								<!--				<ul class="sub-menu">
 													<li><a href="projects.html">Projects</a></li>
 													<li><a href="single-project.html">Project Details</a></li>
 												</ul> -->
 											</li>

 										<!--	<li class="nav-item">
 												<a class="nav-link" href="#">Blog
 													<span class="sub-nav-toggler">
 													</span>
 												</a>
 												<ul class="sub-menu">
 													<li><a href="blog.html">Blog</a></li>
 													<li><a href="single-blog.html">Blog Details</a></li>
 												</ul>
 											</li> -->
 											<li class="nav-item">
 												<a class="nav-link" href="contact.html">	Contato</a>
 											</li>
 										</ul>

 									</div>
 								</nav>
 							</div>
 						</div>
 						<div class="col-lg-3 text-right">
 							<div class="header-right-content">
 								<div class="header-btn main-btn">Atendimento</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</header>


 	<!-- Breadcroumb Area -->

 	
 	<div class="breadcroumb-area3 bread-bg">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="breadcroumb-title text-center">
 						<h1>Instalação de Gases</h1>
 				<!--		<h6><a href="index.html">Home</a> / Service Details</h6> -->
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<!-- Service Details -->


 	<div class="service-details-section section-padding">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-4">
 					<div class="service-list">
 						<h5>Gases</h5>
 			
 						<a href="obra-selecionada.php?obra=medicinal" <?= $titulo=="Instalações Medicinais" ? "class='active'" : "" ?>>Instalações Medicinais<span><i class="las la-arrow-right"></i></span></a>
 						<a href="obra-selecionada.php?obra=industrial" <?= $titulo=="Instalações Industriais" ? "class='active'" : "" ?>>Instalações Industriais<span><i class="las la-arrow-right"></i></span></a>


 					</div>

 					<div class="question-section">
 						<h6>Faça seu orçamento abaixo</h6>
 						<form action="sendemail.php">
 							<input type="text" name="name" id="name" required="" placeholder="Nome">
 							<input type="email" name="email" id="email" required="" placeholder="E-mail">
 							<select name="Produto" id="produto">
								  <option value="volvo">Oxigênio</option>
								  <option value="saab">Nitrogênio</option>
								  <option value="mercedes">Óxido Nitroso</option>
								  <option value="audi">Gases e Misturas Especiais</option>
			
							</select>
 							<textarea name="message" id="message" cols="30" rows="10" required="" placeholder="Deixe sua mensagem..."></textarea>
 							<button class="btn btn-primary" type="submit">Enviar</button>
 						</form>
 					</div>

 					<div class="helpline-section">
 						<div class="helpline-content text-center">
 							<h4>Precisa de ajuda?</h4>
 							<p>Entre em contato com nosso canal de atendimento</p>
 							<button class="btn btn-primary" type="submit">Atendimento</button>
 						</div>
 					</div>
 				</div>

 				<div class="col-lg-8">
 					<div class="single-service">
 						<img src="assets/img/<?=$imagem?>" alt="">
 						<h2><?= $titulo ?></h2>
 						<p><?= $texto ?></p>
 					<!--	<hr>
 						<h5>Building Renovation with Current Technology</h5>
 						<p>Such a game Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia vero ipsam nemo
 							natus, mollitia adipisci sit eveniet non? Nisi doloremque molestiae amet quaerat ipsa
 							maiores dolor deleniti blanditiis pariatur necessitatibus sit nemo, unde nihil eligendi
 							soluta id eum dicta quisquam? a quick brown fox jumps over the lazy dog.</p> -->
 					<!--	<div class="row">
 							<div class="col-lg-6">
 								<div class="service-page-bg">
 									<img src="assets/img/service/4.jpg" alt="">
 								</div>
 							</div>
 							<div class="col-lg-6">
 								<div class="service-page-bg">
 									<img src="assets/img/service/5.jpg" alt="">
 								</div>
 							</div>
 						</div> -->
 					</div>
 				</div> 
 			</div>
 		</div>
 	</div>

 	<!-- Contact Section 

 	<div class="contact-section bg-cover section-padding">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6 col-md-12 col-12 wow fadeInLeft">
 					<div class="contact-info">
 						<div class="section-title">
 							<h6>Contact Us</h6>
 							<h2>Get in <b>Touch</b></h2>
 						</div>
 						<p>If you have a contact Lorem ipsum dolor sit amet cum maiores, excepturi fuga, est doloremque praesentium!</p>
 						<div class="contact-content">
 							<div class="contact-inner">
 								<i class="las la-map-marker"></i>
 								<h6>Visit Us</h6>
 								<p>66 Broklyn St. NY, USA</p>
 							</div>
 							<div class="contact-inner">
 								<i class="las la-envelope"></i>
 								<h6>Email Address</h6>
 								<p>info@dustrian.com</p>
 							</div>
 							<div class="contact-inner">
 								<i class="las la-phone"></i>
 								<h6>Call Now</h6>
 								<p>(+1)212-946-2064</p>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="col-lg-6 col-md-12 col-12 wow fadeInRight">
 					<div class="contact-form">
 						<form action="index.html">
 							<div class="row">
 								<div class="col-lg-6 col-md-6 col-12">
 									<input type="text" placeholder="Your Name">
 								</div>
 								<div class="col-lg-6 col-md-6 col-12">
 									<input type="email" placeholder="E-mail">
 								</div>
 								<div class="col-lg-6 col-md-6 col-12">
 									<input type="tel" placeholder="Phone Number">
 								</div>
 								<div class="col-lg-6 col-md-6 col-12">
 									<input type="text" placeholder="Subject">
 								</div>
 								<div class="col-lg-12">
 									<textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"></textarea>
 								</div>
 								<div class="col-lg-6 col-md-6 col-12">
 									<button class="main-btn">Submit</button>
 								</div>
 							</div>
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

    -->

 	<!-- Footer Area -->

 	<footer class="footer-area">
 		<div class="container">
 			<div class="footer-up">
 				<div class="row">
 					<div class="col-lg-3 col-md-6 col-sm-12">
 						<div class="logo">
 							<img src="assets/img/logo-white.png" alt="dustrian-logo">
 						</div>
 						<p>We are the leaders in the building construction and factories. We’re around over the worldwide. We never give up on the challenges.</p>
 						<div class="social-area">
 							<a href=""><i class="lab la-facebook-f"></i></a>
 							<a href=""><i class="lab la-instagram"></i></a>
 							<a href=""><i class="lab la-twitter"></i></a>
 							<a href=""><i class="la la-skype"></i></a>
 						</div>
 					</div>
 					<div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
 						<h5>Explore</h5>
 						<ul>
 							<li>
 								<a href="#">About Company</a>
 								<a href="#">Latest Projects</a>
 								<a href="#">Get a Quote</a>
 								<a href="#">Pricing Guide</a>
 								<a href="#">Helpful FAQ</a>
 								<a href="#">Sitemap</a>
 							</li>
 						</ul>
 					</div>
 					<div class="col-lg-3 col-md-6 col-sm-12">
 						<h5>Services</h5>
 						<ul>
 							<li>
 								<a href="#"><span>-</span> Construction Engineering</a>
 								<a href="#"><span>-</span> Oil & Gas Refinery</a>
 								<a href="#"><span>-</span> Mechanical Engineering</a>
 								<a href="#"><span>-</span> Chemical Research</a>
 								<a href="#"><span>-</span> Civil Engineering</a>
 							</li>
 						</ul>
 					</div>
 					<div class="col-lg-3 col-md-6">
 						<div class="subscribe-form">
 							<h5>Newsletter</h5>
 							<p>Sign Up now for latest news update</p>
 							<form action="index.html">
 								<input type="email" placeholder="Your email">
 								<button class="main-btn">Subscribe</button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</footer>

 	<div class="footer-bottom">
 		<div class="container">
 			<div class="row justify-content-center align-items-center">
 				<div class="col-lg-6 col-md-6 col-sm-12">
 					<p class="copyright-line">© 2020 Dustrian. All rights reserved.</p>
 				</div>
 				<div class="col-lg-6 col-md-6 col-sm-12">
 					<p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
 				</div>
 			</div>
 		</div>
 	</div>

 	<!-- Scroll Top Area -->
 	<a href="#top" class="go-top" style="display: block;"><i class="las la-angle-up"></i></a>


 	<!-- Popper JS -->
 	<script src="assets/js/popper.min.js"></script>
 	<!-- Bootstrap JS -->
 	<script src="assets/js/bootstrap.min.js"></script>
 	<!-- Wow JS -->
 	<script src="assets/js/wow.min.js"></script>
 	<!-- Way Points JS -->
 	<script src="assets/js/jquery.waypoints.min.js"></script>
 	<!-- Counter Up JS -->
 	<script src="assets/js/jquery.counterup.min.js"></script>
 	<!-- Owl Carousel JS -->
 	<script src="assets/js/owl.carousel.min.js"></script>
 	<!-- Isotope JS -->
 	<script src="assets/js/isotope-3.0.6-min.js"></script>
 	<!-- Magnific Popup JS -->
 	<script src="assets/js/magnific-popup.min.js"></script>
 	<!-- Sticky JS -->
 	<script src="assets/js/jquery.sticky.js"></script>
 	<!-- Progress Bar JS -->
 	<script src="assets/js/jquery.barfiller.js"></script>
 	<!-- Main JS -->
 	<script src="assets/js/main.js"></script>

 </body>

 </html>