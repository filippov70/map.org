<?php
class controller_Avtodor extends ArmBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."avtodor.php" );
	}

	public function getHeader() {}

	public function getFooter() {}	
	
}
?>