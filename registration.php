<?php
include_once 'inc/header.php';
?>
<div class="container ">
	<div class="row justify-content-center mt-5">
		<div class="col-3">
			<a class="btn btn-danger" href="login.php" role="button">Вход в сайта</a>
		</div>
	</div>
	<div class="row justify-content-center mt-5">
		<div class="col-4">
			<img src="img/systems/usericon.png" alt="usericon_image" title="usericon">
		</div>
	</div>
	<!-- задаваме на формата при събмит да изпрати данните в друг файл -->
	<form action="control/user_register.php" method="post" name="reg">
		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-3">
					<h1>Регистрация</h1>
					<p>Моля, попълнете формата за регистрация.</p>
					<hr>
					<label for="username"><b>Име:</b></label><br>
					<input type="text" placeholder="Въведете име" name="name" required><br>
					<label for="username"><b>Фамилия:</b></label><br>
					<input type="text" placeholder="Въведете фамилия" name="fname" required><br>
					<label for="username"><b>Град:</b></label><br>
					<input type="text" placeholder="Въведете град" name="cyti" required><br>
					<label for="username"><b>Потребителско име:</b></label><br>
					<input type="text" placeholder="Въведете потребителско име" name="username" required><br>
					<label for="email"><b>Емайл:</b></label><br>
					<input type="email" placeholder="Въведете имейл" name="email" required><br>
					<label for="pass"><b>Парола:</b></label><br>
					<input type="password" placeholder="Въведете парола" name="user_password" required><br>
					<hr>
					<button type="submit" name="reg" class="btn btn-danger">Регистрирай се</button>
				</div>
			</div>
		</div>
	</form>
</div>
<?php
include_once 'inc/footer.php';