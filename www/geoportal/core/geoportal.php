<?php
class Geoportal {

	private $applicationHelper;

	private function __construct() {}

	static function run() {
		$instance = new Geoportal();
		//$instance -> init();
		$instance -> handlerRequest(); //Обработчик запроса
	}

	private function init() {
		$applicationHelper = controller_ApplicationHelper::instance();
		$applicationHelper -> init();
	}

	private function handlerRequest() {
		$request            = new Request(); //Обёртка запроса с методами для доступа к элементам массива
		$controllerResolver = new ControllerResolver(); //Распознователь команды на выолпнение
		$controller         = $controllerResolver -> getController( $request ); // Получить команду, соответствующую запросу
		$controller -> execute( $request ); //Выполнит комнаду
	}
	
}
?>