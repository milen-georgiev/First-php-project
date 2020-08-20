<?php
include_once('DbConnection.php');
class Upload extends DbConnection { 
//заявка за запис на вино в базата с данни
    public function uploadFile ($wineImage, $wine_title, $wine_info,$sort) {
        $sql = "INSERT INTO wine (wine_image, wine_title, wine_info, sort) VALUES ('$wineImage', '$wine_title', '$wine_info', '$sort');";       
		if($this->connection->query($sql) === TRUE){
			$last_id = $this->connection->insert_id;
            return $last_id;
		}
    }
// заявка за запис на идтата на виното и потребителя във таблицата за връзка
    public function user_wine ($user_id, $id) {
        $sql1 = "INSERT INTO user_wine (users_id,wine_id) VALUES ('$user_id','$id');";
		if($this->connection->query($sql1) === TRUE){
			return true;
		}
    }
}  