<?php 

class ViewController{
	
	protected $newTextArray;
	protected $originalTextArray;
	protected $fileContent;
	
	function __construct( $fileContent ){
		$this->fileContent = file_get_contents($fileContent);
		$this->fileContent = str_replace($this->originalTextArray,$this->newTextArray,$this->fileContent);
	}
	
}