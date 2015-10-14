<?php 

class User{
		public $id;
		public $name;
		public $email;
		public $lastName;
		
		function __construct($id,$name,$lastName,$email){ 
			$this->id = $id;
			$this->name = $name;
			$this->lastName = $lastName;
			$this->email = $email;			
   		}   
}

