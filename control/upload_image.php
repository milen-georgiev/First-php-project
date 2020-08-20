<?php
session_start();
include_once('../classes/Upload.php');
$upload = new Upload();

if (isset($_POST['addWine'])) {
	$info = $_POST['info'];
	$title = $_POST['title'];
	$sort = (int)$_POST['fetchby'];
	if(!empty($title) && !empty($info) && !empty($_FILES['wine_image']['name'])){
		$wineImage = time() . '_' . $_FILES['wine_image']['name'];
		$target = '../img/wine/' . $wineImage;
		if (move_uploaded_file($_FILES['wine_image']['tmp_name'], $target)) {
			$add = $upload->uploadFile($wineImage, $title, $info, $sort);
		}

		if(isset($add) && is_numeric($add) && $add > 0) {
			$user_id = $_SESSION['user'];
			$user_wine = $upload->user_wine($user_id, $add);
			if(isset($user_wine) && $user_wine === TRUE) {
				header('location:../wine.php');
			}
			else { 
				echo 'Inserting error!';
			}
		}
	}
	else {
		header('location:../add.php');
	}
}