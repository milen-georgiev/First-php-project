		<footer>
			<div class="container">
				<div class="row border-top mt-5">
					<div class="col-xl-4 col-md-4 col-sm-12 text-center">
						<a href="index.php">
							<img src="img/systems/logo.jpg" alt="logo_image" title="logo for sites" width="40%">
						</a>
						<p>fourglass &copy 2019</p>
					</div>
					<div class="col-xl-4 col-md-4 col-sm-12 text-center">
						<ul>
							<li>
								<a href="index.php">Начало</a>
							</li>
							<li>
								<a href="wine.php">Вина</a>
							</li>
							<li>
								<a href="curious.php">Любопитно</a>
							</li>
							<li>
								<a href="about.php">За Нас</a>
							</li>
							<?php if (!isset($_SESSION['user'])) { ?>
								<li class="nav-item">
									<a href="login.php">Вход</a>
								</li>
							<?php } ?>
							<?php if (isset($_SESSION['user'])) { ?>
								<li class="nav-item">
									<a href="account.php">Профил</a>
								</li>
							<?php } ?>
							<?php if (isset($_SESSION['user'])) { ?>
								<li class="nav-item">
									<a href="control/logout.php">Изход</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="col-xl-4 col-md-4 col-sm-12 text-center" id="socials">
						<h2>Подкрепете ни в социалните мрежи</h2>
						<a class="p-2" href="https://www.facebook.com/">
							<img src="img/socialweb/facebook.png" alt=facebook title="facebook">
						</a>
						<a class="p-2" href="https://www.linkedin.com/">
							<img src="img/socialweb/linkedin.png" alt="linkedin" title="linkedin">
						</a>
						<a class="p-2" href="https://twitter.com/login?lang=bg">
							<img src="img/socialweb/twitter.png" alt="twitter" title="twitter">
						</a>
						<a class="p-2" href="https://www.instagram.com/?hl=bg">
							<img src="img/socialweb/instagram.png" alt="instagram" title="instagram">
						</a>
					</div>
				</div>
			</div>
			<script src="js/jquery.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="js/sortWine.js?v=1"></script>
			<script src="js/nav.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</footer>
	</body>
</html>