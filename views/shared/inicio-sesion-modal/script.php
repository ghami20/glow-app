<?php
session_start();
if(isset($_POST['submitBtn'])){
	header("Location: ../../glow-app/views/panel-control/panel-control.php");
	exit();
}