<?php
include("funcoes.php");
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

			<!-- Main -->
			<div class="main_cadastro">
				<h1 align="center" class="mb-4 mt-4">Cadastro de rappers</h1>
				<div class="container col-12 divcadastro rounded border border-primary mb-5">
					<form name="tTeste" action="insert.php" method="POST" enctype="multipart/form-data" class="ml-2 mr-2">

						<fieldset> <legend>Cadastre seu rapper preferido!</legend>
							<div class="form-group">
								<label>Nome:</label>
								<input type="text" name="formnome" placeholder="Nome do rapper" required="">
							</div>

							<div class="form-group">
								<label>Música:</label>
								<input type="text" name="formmusica" placeholder="Música de referência" required="">
							</div>

							<div class="form-group">
								<label>Foto:</label>
								<input type="file" name="formfoto" placeholder="Fotografia:" required="">
								<br>
								<br>
								<input type="submit" value="Cadastrar">
							</div>
						</fieldset>
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