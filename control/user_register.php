<?php
session_start();
include_once '../classes/Register.php';
$user = new Register(); 

if (isset($_REQUEST['reg'])) {
    extract($_REQUEST);
    $register = $user->reg_user($name, $fname, $cyti, $username, $email, $user_password);
    if ($register) {
        echo 'Честито, Вие успешно се регистрирахте в сайта. <a href="../login.php">Влезте от тук !</a>';
    } else {
        echo 'Регистрацията НЕ е успешна, името и / или email-a са грешни!';
    }
}
