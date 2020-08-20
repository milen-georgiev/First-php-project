<?php
include_once 'inc/header.php';
?>
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-3">
		<a class="btn btn-danger" href="registration.php" role="button">Нова Регистрация</a>
		</div>
	</div>
	<div class="row justify-content-center mt-5">
		<div class="col-4">
			<img src="img/systems/usericon.png" alt="usericon_image" title="usericon">
		</div>
	</div>
	<!-- задаваме на формата при събмит да изпрати данните в друг файл -->
	<form action="control/user_login.php" method="post" name="Login">
		<div class="container">
			<div class="row justify-content-center mt-5">
				<div class="col-3">
					<h1>Вход</h1>
					<p>Моля, попълнете формата за вход.</p>
					<hr>
					<label for="username"><b>Потребителско име:</b></label><br>
					<input type="text" placeholder="Въведете потреб. име" name="username" required><br>
					<label for="pass"><b>Парола:</b></label><br>
					<input type="password" placeholder="Въведете парола" name="user_password" required><br>
					<hr>
					<button type="submit" name="login" class="btn btn-danger">Вход</button>
				</div>
			</div>
		</div>
	</form>
</div>
<?php
include_once 'inc/footer.php';