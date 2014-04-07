<?php
class ControllerResolver {

	private static $baseController;
	private static $defaultController;

	public function __construct(){
		
		if( ! self::$baseController ){
			self::$baseController    = new ReflectionClass( "BaseController" );
			self::$defaultController = new controller_Default();
		}
	}

	public function getController( Request $request ){

		$controller = $this -> getRoute();

		if( $controller == '') {
			return self::$defaultController;
		}

		$seporator = DIRECTORY_SEPARATOR;
		$filepathToController = "geoportal{$seporator}controller{$seporator}{$controller}.php";
		$controllerName       = "controller_$controller";

		if( file_exists( $filepathToController ) ){
			require_once $filepathToController;

			if( class_exists( $controllerName ) ) {
				$objController = new ReflectionClass( $controllerName );

				if( $objController -> isSubClassOf( self::$baseController ) ) {
					return $objController -> newInstance();
				} else {
					$request -> addFeedback( "'$controller' не является потмком BaseController" );
				}
			}
		}

		$request -> addFeedback( "Контроллер '$controller' не найден" );
		return clone self::$defaultController;
	}

	public function getRoute() {		
		$requestURI = $_SERVER["REQUEST_URI"];

		$strpos = strpos( $requestURI, '?' );

		if ( $strpos ) {
			$requestURI = substr( $requestURI, 0, $strpos );
		}

		$controller = str_replace( array( '.', '/' ), "", $requestURI );	

		return $controller;	
	}
}
?>