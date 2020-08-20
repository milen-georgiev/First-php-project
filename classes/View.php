<?php
include_once('DbConnection.php');
class View extends DbConnection {    
//заявка за изваждане на всички вина от таблизата        
    public function returnView ($table){
        $array = array();
        $query = "SELECT wine.wine_image, wine.wine_title, wine.wine_info, wine.wine_added_date, wine.sort, users.username 
        FROM ".$table." INNER JOIN user_wine ON wine.wine_id = user_wine.wine_id INNER JOIN users ON users.user_id = user_wine.users_id";
        $result = $this->connection->query($query);
        while($row = mysqli_fetch_assoc($result)){
            $array[] = $row;
        }
        return $array;        
    }
//заявка за изваждане на последните 3 записа с вина
    public function lastAdd ($table){
        $lastWine = array();
        $query1 = "SELECT wine.wine_image, wine.wine_title, wine.wine_info, wine.wine_added_date, wine.sort, users.username 
        FROM ".$table." INNER JOIN user_wine ON wine.wine_id = user_wine.wine_id INNER JOIN users ON 
        users.user_id = user_wine.users_id Order by wine_added_date DESC LIMIT 3";
        $last = $this->connection->query($query1);
        while($row = mysqli_fetch_assoc($last)){
            $lastWine[] = $row;
        }
        return $lastWine;      
    }
}