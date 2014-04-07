<?php
class controller_TutorialEx3 extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."/tutorials/tutorial-ex3.php" );
	}

	public function getHeader() {}

	public function getFooter() {}
	
}
?>