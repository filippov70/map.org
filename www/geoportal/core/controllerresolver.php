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
		$seporator = DIRECTORY_SEPARATOR;
		$requestURI = $_SERVER["REQUEST_URI"];
		
		if( $requestURI == '/' || $requestURI == '/index.php' ){
			return self::$defaultController;
		}

		$controller           = str_replace( array( '.', '/' ), "", $requestURI );
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
	
}
?>