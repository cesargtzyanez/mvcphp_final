<?php

class Main{
	
	private $viewVariable;
	
	public function setView($viewVariable){
		
		$this->viewVariable = $viewVariable;
		
		if( isset( $_GET['hint'] ) ){
			$this->viewVariable = "find";
		}
		
		switch( $this->viewVariable ){
			
			case 'home':
				//echo $this->viewVariable;  
				require("homeController.php");
				$newView = new Home(HOME_VIEW);
				break;
				
			case 'find':
				//echo $this->viewVariable;  
				require("findController.php");
				$newView = new FindView(FIND_VIEW);
				break;	
			
			case 'addUser':
				//echo $this->viewVariable;
				require("addController.php");
				$newView = new AddView(ADD_VIEW);
				break;
			
			case 'editUser':
				//echo $this->viewVariable;
				require("editController.php");
				$newView = new EditView(EDIT_VIEW);
				break;
			
			case 'deleteUser':
				//echo $this->viewVariable;
				require("deleteController.php");
				$newView = new DeleteView();
				break;
			
			default: 
				//echo $this->viewVariable;
				require_once("homeController.php");
				$newView = new Home(HOME_VIEW);
				break;
		}
		
	}

}