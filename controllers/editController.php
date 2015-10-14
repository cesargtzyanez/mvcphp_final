<?php 

require("ViewController.php");


class EditView extends ViewController{
	
	private $id;
	
	function updateUser(){
		$newUser = new User( $_POST['id_usuario'], $_POST['nombre_usuario'],$_POST['apellidos_usuario'],$_POST['email_usuario'] );
		$updateConn = new UserConnection();
		$updateConn->editUser( $newUser );
		echo '<script>window.location="index.php";</script>';
	}
	
	function __construct( $fileContent ){
		
		if( isset( $_POST['id_usuario'] ) ){
			$this->updateUser();			
		}
		
		$this->id = $_GET['u'];
		$conn = new UserConnection();
		
		$numUsers = $conn->findUserById($this->id);
		$theUser = $conn->result->fetch_assoc();
		
		$userName = $theUser["nombre_usuario"];
		$userLastName = $theUser["apellidos_usuario"];
		$userCompleteName = $theUser["nombre_usuario"].$theUser["apellidos_usuario"];
		$userEmail = $theUser["email_usuario"];
		
				
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
									"Actualiza a: ".$userCompleteName,
									$actionForm,
									$this->id,
									"Actualizar",
									$userName,
									$userLastName,
									$userEmail );
										
										
		
		parent::__construct( $this->fileContent );
		echo $this->fileContent;
	}

}