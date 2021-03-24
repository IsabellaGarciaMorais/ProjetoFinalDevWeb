<?php
//include("funcoes.php");
include("consulta.php");
?>

<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Big Rapper Brasil</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="css/estilo.css" />
</head>
<body id="top">

	<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<header>
						<h1>Big Rappers Brasil</h1>
						<p><br>Uma galeria com os 6 melhores rappers do Brasil!<br> <br> Vote no seu/sua rapper predileto(a)! <br></p>
					</header>
					<a href="#main" class="more">Learn More</a>
				</div>
			</section>

			<!-- Main -->
			<div id="main">
				<div class="inner">

					<button><a href="cadastro.php">Cadastrar Rapper</a></button>

					<!-- Boxes -->
					<form name="votacao" action="vota.php" method="POST">
						<div class="thumbnails">

							<?php while ($dados = $consulta->fetch_array()) { ?>
								<div class="box">
									<a href="https://youtu.be/s6zR2T9vn2c" class="image fit">
										<img src=<?php echo $dados['Fotografia'];?> width="320" height="205"/>
									</a>
									<div class="inner">
										<h3><?php echo $dados['nome'];?></h3>
										<p>Música de referência: <?php echo $dados['Referência'];?></p>
										<button type="submit" name="bEmicida" value="Emicida">Votar</button>
									</div>
								</div>

							<?php } ?>
						</div>	
					</form>
				</div>
			</div>

			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Sobre nós</h2>
					<p>Página utilizada e editada pelos alunos Isabella, Pedro e Lucas.</p>

					<ul class="icons"> 
						<li>
							<a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a>
						</li> 
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a>
						</li> 
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li> 
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul> 
					<p class="copyright">&copy; Untitled. Design: </p>
					<a href="https://templated.co">TEMPLATED</a>
					Images:<p>Google</p> 
				</div> 
			</footer>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>
</html>