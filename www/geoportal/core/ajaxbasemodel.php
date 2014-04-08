<?php
abstract class AjaxBaseModel {

	final function __construct() {}

	final function Response( Request $request ) {
		return $this -> doResponse( $request );	
	}

	abstract function doResponse( Request $request );
	
}
?>