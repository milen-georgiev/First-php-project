<?php
include_once 'inc/header.php';
include_once('control/is_logged.php');
include_once('classes/User.php');
$user = new User();
// пускаме заявка за да извадим данните на потребителя и да му ги визоализираме
$sql = "SELECT * FROM users WHERE user_id = '".$_SESSION['user']."'";
$row = $user->details($sql);
?>
<div class="container mt-5">
	<div class="card text-white bg-secondary mb-3">
		<h5 class="card-header">Добре дошли: <span class="username"><?php echo $row['username']; ?></span></h5>
		<div class="card-body border-2">
			<h5 class="card-title">Информация за потребителя:</h5>
			<p class="card-text">Име: <span class="info"><?php echo $row['firstname']; ?></span></p>
			<p class="card-text">Фамилия: <span class="info"><?php echo $row['lastname']; ?></span></p>
			<p class="card-text">Град: <span class="info"><?php echo $row['cyti']; ?></span></p>
			<p class="card-text">Email: <span class="info"><?php echo $row['email']; ?></span></p>
			<div class="float-left"><a href="add.php" class="btn btn-primary">Добави вина</a></div>
			<div class="float-right"><a href="control/logout.php" class="btn btn-primary">Изход</a></div>
		</div>
	</div>
</div>
<?php
include_once 'inc/footer.php';