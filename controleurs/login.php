<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){ 
	header("location:?page=acceuil");
	# code...
}
require_once('views/login.php');
