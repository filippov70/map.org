<?php
class controller_Enter extends MainBaseController {

	public function doExecute ( Request $request ) {

		$modelEnter = new model_Enter();
		$request -> addFeedback ( $modelEnter -> getValue() );

		$request -> addFeedback ( "Введите имя и пароль" );
		include ( VIEW_DIR."enter.php" );
		
	}

}
?>