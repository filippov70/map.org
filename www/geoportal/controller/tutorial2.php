<?php
class controller_Tutorial2 extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."/tutorials/tutorial2.php" );
	}
	
}
?>