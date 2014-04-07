<?php
class controller_Tutorial1 extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."/tutorials/tutorial1.php" );
	}
	
}
?>