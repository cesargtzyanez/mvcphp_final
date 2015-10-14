<?php 
//require_once("../config/config.php");
//require("interfaces/DatabaseInterface.php");

class DB_Model implements Database_Interface {
	
	private $connection;
	protected $query;
	public $result;
	public $numRows;
	public $response = false;
		
	public function connectDB(){		
       $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Error " . mysqli_error());
    }
	
	public function disconnectDB(){
		$this->connection = mysqli_close();
	}
	
	protected function doQuery($someQuery){
		$this->connectDB();
		$this->query = $someQuery;
		$this->result = mysqli_query( $this->connection, $this->query) or die( mysql_error() );
		$this->numRows = mysqli_num_rows($this->result);
		$this->disconnectDB();
	}
	
}

