<?php
session_start();

unset($_SESSION['emp_type']);
header('location: index.php');
?>
