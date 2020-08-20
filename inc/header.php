<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Асистент за Вино и Храна</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="description" content="Оценяване и мнение на вина и ястия, препоръки за съчетания. Информация за вина и съхранението им." />
		<meta name="keywords" content="Вино, Вина, Коняк, храна, ястия, за виното, за храни, изба, съхтанение, wine, food, cognac, cellar, food for wine, ястие за вино" />
		<meta name="author" content="Milen Georgiev" />
		<meta name="copyright" content="Copyright owner" />
		<meta name="robots" content="follow" />
		<meta http-equiv="content-language" content="bg" />
		<link rel="stylesheet" href="style/style.css?v=1">
		<link rel="icon" href="img/systems/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-md-3 col-sm-12">
						<a href="index.php">
							<img src="img/systems/logo.jpg" alt="logo_image" title="logo for sites" width="100%">
						</a>
					</div>
					<div class="col-xl-9 col-md-9 col-sm-12">
						<img src="img/systems/logo_2.png" alt="logo_image_2" title="baner logo for sites" width="100%">
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 mx-auto">
						<li class="nav-item">
							<a class="nav-link text-white ml-5" href="index.php">Начало <span class="sr-only">(текущо)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white ml-5" href="wine.php">Вина</a>
						</li>
						<?php if(isset($_SESSION['user'])) { ?>
							<li class="nav-item">
								 <a class="nav-link text-white ml-5" href="add.php">Добави вино</a>
							 </li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link text-white ml-5" href="curious.php">Любопитно</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white ml-5" href="about.php">За Нас</a>
						</li>
						<?php if(!isset($_SESSION['user'])) { ?>
							<li class="nav-item">
								<a class="nav-link text-white ml-5" href="login.php">Вход</a>
							</li>
						<?php } ?>
						<?php if(isset($_SESSION['user'])) { ?>
							<li class="nav-item">
								 <a class="nav-link text-white ml-5" href="account.php">Профил</a>
							 </li>
						<?php } ?>
						<?php if(isset($_SESSION['user'])) { ?>
							<li class="nav-item">
								 <a class="nav-link text-white ml-5" href="control/logout.php">Изход</a>
							 </li>
						<?php } ?>
					</ul>
				</div>
			</nav>         
		</header>