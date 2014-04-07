<?php
class controller_TutorialEx1 extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."/tutorials/tutorial-ex1.php" );
	}

	public function getHeader() {}

	public function getFooter() {}
	
}
?>