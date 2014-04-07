<?php
class controller_TutorialEx2 extends MainBaseController {

	public function doExecute ( Request $request ) {		
		include ( VIEW_DIR."/tutorials/tutorial-ex2.php" );
	}

	public function getHeader() {}

	public function getFooter() {}
	
}
?>