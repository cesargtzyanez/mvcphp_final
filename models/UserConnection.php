<?php 
	require_once("DB_Model.php");

class UserConnection extends DB_Model{
	
	public $operation;
		
	public function getAll(){
		$this->operation = GETALL_USER;		
		$this->doQuery("SELECT * FROM ".DB_TABLE." ORDER BY apellidos_usuario,nombre_usuario  ASC");
		return $this->numRows;
	}
	
	public function findUser($email){
		$this->operation = FIND_USER;	
		$this->doQuery("SELECT * FROM ".DB_TABLE." WHERE email_usuario = '".$email."' ORDER BY apellidos_usuario,nombre_usuario  ASC");
		$this->numRows;
		
		if($this->numRows>0){
			$this->response=true;
		}
		
		return $this->numRows;
		
	}
	
	public function findUserByHint($hint){
		$this->operation = FIND_USER;	
		$this->doQuery("SELECT * FROM ".DB_TABLE." WHERE nombre_usuario LIKE '%".$hint."%' OR apellidos_usuario LIKE '%".$hint."%' OR email_usuario LIKE '%".$hint."%' ORDER BY apellidos_usuario,nombre_usuario ASC" );
		$this->numRows;
		
		if($this->numRows>0){
			$this->response=true;
		}
		
		return $this->numRows;
		
	}
	
	public function findUserById($id){
		$this->operation = FIND_USER;	
		$this->doQuery("SELECT * FROM ".DB_TABLE." WHERE id_usuario = '".$id."'");
		$this->numRows;
		
		if($this->numRows>0){
			$this->response=true;
		}
		
		return $this->numRows;
		
	}
	
	public function addUser($user){
		
		$this->operation = ADD_USER;
		
		if( $this->findUser($user->email) ==0 ){	
			$this->doQuery("INSERT INTO ".DB_TABLE." (nombre_usuario,apellidos_usuario,email_usuario) 
			VALUES('".$user->name."','".$user->lastName."','".$user->email."')" );
			$this->response = true;
		}else{
			$this->response=false;
		}
	}
	
	public function editUser($user){
		$this->operation = EDIT_USER;
		$this->doQuery("UPDATE ".DB_TABLE." SET nombre_usuario='".$user->name."',apellidos_usuario='".$user->lastName."', 
		email_usuario='".$user->email."' WHERE id_usuario='".$user->id."'" );
		$this->response = true;
	}
	
	public function editUserByEmail($user){
		$this->operation = EDIT_USER;
		if( $this->findUser($user->email) ==1 ){	
			$this->doQuery("UPDATE ".DB_TABLE." SET nombre_usuario='".$user->name."',apellidos_usuario='".$user->lastName."' 
			WHERE email_usuario='".$user->email."'" );
			$this->response = true;
		}else{
			$this->response = false;
		}
	}
	
	public function deleteUser($id){
		$this->operation = DELETE_USER;
		$this->doQuery("DELETE FROM ".DB_TABLE." WHERE id_usuario='".$id."'" );
		$this->response = true;
	}
	
}
