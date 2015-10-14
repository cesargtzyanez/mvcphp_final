<?php 
	
	require_once("config/config.php");
	require("models/interfaces/DatabaseInterface.php");
	require_once("models/DB_Model.php");
	require_once("models/UserConnection.php");
	require_once("models/User_Model.php");
	
	require_once("controllers/mainController.php");
	
	
	$main = new Main();
	
	$main->setView($_GET['v']);
	
	