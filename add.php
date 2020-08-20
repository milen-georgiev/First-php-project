<?php
include_once 'inc/header.php';
include_once 'inc/filter.php';
include_once('control/is_logged.php');

?>
<div class="container">
	<div class="row">
		<div class="col-4 offset-4 form-div">
			<form action="control/upload_image.php" method="post" enctype="multipart/form-data">
				<h3 class="text-center">Добави ново вино!</h3>
				<?php if (!empty($msg)) : ?>
					<div class=" alert <?php echo $css_class; ?> ">
						<?php echo $msg; ?>
					</div>
				<?php endif; ?>
				<div class="form-group text-center">
					<!-- с js визоализираме снимката която ще качим да се вижда при самото избиране -->
					<img src="img/systems/placeholder.png" onclick="triggerClick()" id='wine_upload_db' />
					<label for='wine_image'>Изберете снимка на виното.</label>
					<input type="file" name="wine_image" onchange="displayImage(this)" id="wine_image" style="display: none;">
				</div>
				<div class="form-group">
					<label for="title">Добавете заглавие за виното.</label>
					<input type="text" name="title" id="title" class="form-control" />
				</div>
				<div class="form-group">
				<label for="title">Изберете сорта на виното.</label>
					<select id="fetchval" name="fetchby">
						<?php
						foreach ($sortWine as $key => $sort) {
							echo '<option value="' . $key . '">' . $sort . '</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="info">Добавете информация за виното.</label>
					<textarea name="info" id="info" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" name="addWine" class="btn btn-primary btn-block">Добави вино</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="js/main.js"></script>
<?php
include_once 'inc/footer.php';
