<?php
class controller_Catalog extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."catalog.php" );
	}
	
}
?>