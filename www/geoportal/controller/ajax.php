<?php
class controller_Ajax extends AjaxBaseController {	

	public function doExecute ( Request $request ) {

		$model     = $request -> getProperty( 'action' );
		$modelName = "model_$model";

      	if( class_exists( $modelName ) ) {
			$objReflectionModel = new ReflectionClass( $modelName );
			$objModel           = $objReflectionModel -> newInstance();
			$response           = $objModel -> Response( $request );
      	}

		echo json_encode( $response );
	}
}
?>