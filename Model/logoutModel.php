<?php

require '../DAO/database.php';

session_start();
unset($_SESSION['email']);
session_destroy();
header("location: ../index.php");
exit();
?>