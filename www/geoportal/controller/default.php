<?php
class controller_Default extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."default.php" );
	}
	
}
?>