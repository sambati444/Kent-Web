<?php
session_start();
if(!$_SESSION['user_data']) {
	header("location:index.php?msg=2");	exit;
}
?>
