<?php 

require("ViewController.php");


class DeleteView extends ViewController{
		
	function __construct( $fileContent ){
		$deleteConn = new UserConnection();
		$deleteConn->deleteUser( $_GET['u'] );
		echo '<script>window.location="index.php";</script>';
	}

}