<?php 

require("ViewController.php");


class AddView extends ViewController{
	
	function addNewUser(){
		$newUser = new User( $_POST['id_usuario'], $_POST['nombre_usuario'],$_POST['apellidos_usuario'],$_POST['email_usuario'] );
		$addConn = new UserConnection();
		$addConn->addUser( $newUser );
		echo '<script>window.location="index.php";</script>';
	}
	
	function __construct( $fileContent ){
		
		if( isset( $_POST['id_usuario'] ) ){
			$this->addNewUser();			
		}
		
		$newContent="";
		$this->fileContent = $fileContent;
		$this->originalTextArray = array("{theTitle}",
										"{h1Title}",
										"{h2Message}",
										"{action}",
										"{hiddenValue}",
										"{buttonText}",
										"{userName}",
										"{lastName}",
										"{emailUser}");
		
		$this->newTextArray=array( EDIT_TITLE.$userCompleteName,
									EDIT_H1TITLE,
									"Completa la información y agrega un nuevo usuario",
									$actionForm,
									"0",
									"Agregar",
									"",
									"",
									"");
										
										
		
		parent::__construct( $this->fileContent );
		echo $this->fileContent;
	}

}