<?php
session_start();
include('function_inc.php');
unset($_SESSION['IS_LOGIN']);
redirect('login.php');

?>