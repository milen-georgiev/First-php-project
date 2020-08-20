<?php
include_once('DbConnection.php');
class Register extends DbConnection {

    public function reg_user($name, $fname, $cyti, $username, $email, $user_password) {
    // проверка дали има потребител или имеил в базата    
        $user_password = md5($user_password);
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $check =  $this->connection->query($sql);
        $count_row = $check->num_rows;
    // запис на новия потребител
        if ($count_row == 0) {
            $sql1 = "INSERT INTO users SET username='$username',email='$email', user_password='$user_password', cyti='$cyti', 
            firstname='$name', lastname='$fname' ";
            $result = mysqli_query($this->connection, $sql1) or die(mysqli_connect_errno() . "Data cannot be inserted");
            return $result;
        } else {
            return false;
        }
    }
}