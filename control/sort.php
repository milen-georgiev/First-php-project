<?php
include_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'DbConnection.php');
include_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR.'filter.php');

$conn = new DbConnection();
$request=$_POST['request'];
if (!$request == 0){
$query ="SELECT wine.wine_image, wine.wine_title, wine.wine_info, wine.wine_added_date, wine.sort, users.username FROM wine INNER JOIN 
user_wine ON wine.wine_id = user_wine.wine_id INNER JOIN users ON users.user_id = user_wine.users_id WHERE wine.sort='$request'";
$output = $conn->query($query);
}else{
	$query ="SELECT wine.wine_image, wine.wine_title, wine.wine_info, wine.wine_added_date, wine.sort, users.username FROM wine INNER JOIN 
user_wine ON wine.wine_id = user_wine.wine_id INNER JOIN users ON users.user_id = user_wine.users_id";
$output = $conn->query($query);
}
foreach ($output as $resultView) : ?>
<div class="card mb-3">
  <div class="row no-gutters">
	<div class="col-md-4">
	  <img src="img/wine/<?php echo $resultView['wine_image']; ?>" class="card-img" alt="...">
	</div>
	<div class="col-md-8">
	  <div class="card-body">
		<h5 class="card-title"><?php echo $resultView['wine_title']; ?></h5>
		<h6 class="card-title"><?php
								$sW = $resultView['sort'];
								echo $sortWine[$sW];
								?></h6>
		<p class="card-text"><?php echo $resultView['wine_info']; ?></p>
		<p class="card-text d-flex justify-content-around ">
		  <small class="text-muted">Добавено от <b><?php echo $resultView['username']; ?></b> </small>
		  <small class="text-muted">Добавено на <?php echo $resultView['wine_added_date']; ?> </small>
		</p>
	  </div>
	</div>
  </div>
</div>
<?php endforeach;

 ?>