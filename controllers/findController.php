<?php 
require("ViewController.php");


class FindView extends ViewController{
	
	private $hint;
	
	function __construct( $fileContent ){
		
		$this->hint = $_GET['hint'];
		
		$conn = new UserConnection();
		$numUsers = $conn->findUserByHint( $this->hint );
		$newContent="";
		
		$index = 1;
		while ( $row = $conn->result->fetch_assoc()) {
			
        	$newContent .= 			
			'<tr class="row">
        	<td>'.$index.'</td>
            <td>'.$row['apellidos_usuario'].'</td>			
            <td>'.$row['nombre_usuario'].'</td>
            <td>'.$row['email_usuario'].'</td>
            <td><a href="?v=editUser&u='.$row['id_usuario'].'">Editar</a></td>
            <td><a href="?v=deleteUser&u='.$row['id_usuario'].'">Eliminar</a></td>
	        </tr>';
			
			$index++;
    	}
		
		$this->fileContent = $fileContent;
		$this->originalTextArray = array("{theTitle}","{h1Title}","{h2Message}","{newrows}");
		$this->newTextArray=array( FIND_TITLE,FIND_H1TITLE,FIND_H2TITLE.$numUsers,$newContent );
		parent::__construct( $this->fileContent );
		
		echo $this->fileContent;
		
	}
	
}