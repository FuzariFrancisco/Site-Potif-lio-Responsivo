<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Meu Portifólio</title>
	<link rel="icon" type="imagem/png" href="images/Logo.png"/>
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/<?php echo $style?>.css">
	<link rel="stylesheet" href="WOW-master/css/libs/animate.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

	<?php include('includes/organisms/menu-responsivo.php');?>	

	<div class="layout">
		<header>
			<div class="container">
				<div class="logo">
					<img src="images/Logo.png" alt="Logo TAG topo">
				</div>

				<div class="links">
					
				<?php include('includes/organisms/menu.php');?>	

					<a class="toggle" href="javascript:;">
						<span></span>
						<span></span>
						<span></span>
					</a>

					<ul class="social">
						<li>
							<a href="https://github.com/FuzariFrancisco" target="_blank"><img src="images/Github.png" alt="" style="width: 30px; height: 30px;"></img></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/francisco-fuzari-010912189/" target="_blank"><img src="images//Linkedin.png" alt="" style="width: 30px; height: 30px;"></img></a>
						</li>
					</ul>
				</div>

				<h1><strong><?php echo $chamada ?></strong></h1>
				<p>Learn // Code // Play</p>
			</div>
		</header>

		<main>