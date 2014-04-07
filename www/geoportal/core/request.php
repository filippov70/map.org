<?php
class Request {

	private $properties;
	private $feedback = array();

	public function __construct() {
		$this -> init();
		//base_RequestRegistry::setRequest( $this );
	}

	private function init() {
		if ( isset( $_SERVER['REQUEST_METHOD'] ) ) {
			$this -> properties = $_REQUEST;
			return;
		}
		foreach ( $_SERVER['argv'] as $arg ) {
			if ( strpos ( $arg, '=' ) ) {
				list ( $key, $val ) = explode ( "=", $arg );
				$this -> setProperty ( $key, $val );
			}
		}
	}

	public function getProperty ( $key ) {
		if ( isset ( $this -> properties[$key] ) ) {
			return $this -> properties[$key];
		}
	}

	public function setProperty ( $key, $val ) {
		$this -> properties[$key] = $val;
	}

	public function addFeedback ( $msg ) {
		array_push( $this -> feedback, $msg );
	}

	public function getFeedback () {
		return $this -> feedback;
	}	

	public function getFeedbackString ( $separator = "\n" ) {
		return implode ( $separator, $this -> feedback );
	}
	
}
?>