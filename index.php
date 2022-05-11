<!doctype html>
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="IFRN" content="IE=edge">
		<title>IFRN - Portal</title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://getbootstrap.com/docs/5.0/forms/select/">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="assets/inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="assets/inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="assets/css/reset.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/css/skin/cool-gray.css">

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html">Unika</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="menu-principal nav navbar-nav navbar-center">
                            <li><a class="page-scroll area_aluno" href="body">ÁREA DO ALUNO</a></li>  
                            <li><a class="page-scroll barra">|</a></li> 
                            <li><a class="page-scroll" href="#about-section">PORTAL EAD</a></li>                        
                            <li><a class="page-scroll" href="#about-section">PORTAL IFRN</a></li>
                            <li><a class="page-scroll" href="#services-section">SUAP</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">SAIR</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll ph-name" href="#services-section">Joao da Silva</a></li>
                            <li><a class="page-scroll ph-email" href="#services-section">joaodasilva@email.com</a></li>
                            <li><i class="ph-user-circle user"></i></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->
                

            </header>
            <!-- ========= END HEADER =========-->
                        
          <!-- Begin cta -->
          <section id="cta-section">
          <div class="col-md-8 col-sm-12" >
                <section class="bg-secondary">
                <div class="bg-section-title">
                    <div class="bg-title">
                        <p class="titulo-curso">MINHAS DISCIPLINAS</p>
                    </div>
                        <div class="bg-img"><i class="ph-question"></i></div>
                    <div class="bg-descricao">
                        <p class="descricao-curso">Clique nas disciplinas abaixo para saber mais detalhes.</p>
                    </div>
                    <div class="linha-horizontal"></div>
                </div> 
                <div class="grid-container">
                    <div class="grid-item">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>TODAS DISCIPLINAS</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <div class="grid-item">
                    <select class="form-select andamento" aria-label="Default select example">
                        <option selected>EM ANDAMENTO</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    </div>
                    <div class="grid-item">
                        <div class="periodos">
                            <button type="button" class="btn btn-secondary">2022.1</button>
                            <button type="button" class="btn btn-light">2021.2</button>
                            <button type="button" class="btn btn-light">2021.1</button>
                            <button type="button" class="btn btn-light">2020.2</button>
                        </div>                   
                    </div>
                </div>   
                </section>
            </div>
            <div class="col-md-4 col-sm-12 ">
                <aside class="bg-secondary h-100">
                    <div class="bg-lateral-section-title">
                        <div class="bg-lateral-title">
                            <p class="detalhe-curso-lateral">DETALHES</p>
                        </div>
                            <div class="bg-img-lateral"><i class="ph-question"></i></div>
                        <div class="bg-descricao-lateral">
                            <p class="descricao-curso-lateral">Mais detalhes sobre a disciplinas abaixo.</p>
                        </div>
                        <div class="linha-horizontal-lateral-"></div>
                    </div> 
                </aside>
            </div>  
          </section>
          <!-- End cta -->        
            <!-- Begin footer -->
            <footer class="text-off-white">
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Instituto Federal de Educação, ciência e Tecnologia do Rio Grande do Norte &copy; 2022. Todos os direitos reservados.</p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        <!-- Plugins JS -->
        <script src="https://unpkg.com/phosphor-icons"></script>
		<script src="assets/inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="assets/inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="assets/inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="assets/inc/animations/js/wow.min.js"></script>
        <script src="assets/inc/waypoints.min.js"></script>
		<script src="assets/inc/isotope.pkgd.min.js"></script>
		<script src="assets/inc/classie.js"></script>
		<script src="assets/inc/jquery.easing.min.js"></script>
		<script src="assets/inc/jquery.counterup.min.js"></script>
		<!--<script src="assets/inc/smoothscroll.js"></script>-->

		<!-- Theme JS -->
		<script src="assets/js/theme.js"></script>

    </body> 
                    
</html>
