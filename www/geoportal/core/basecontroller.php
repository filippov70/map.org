<?php
abstract class BaseController {

	final function __construct() {}

	final function execute( Request $request ) {
		$this -> getHeader();
		$this -> doExecute( $request );
		$this -> getFooter();		
	}

	abstract function getHeader();

	abstract function getFooter();	

	abstract function doExecute( Request $request );
	
}
?>