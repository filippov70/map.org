<?php
class controller_Ajax extends AjaxBaseController {

	public function doExecute ( Request $request ) {	
		echo '<pre>';
		var_dump($request);
		echo '</pre>';
	}
	
}
?>