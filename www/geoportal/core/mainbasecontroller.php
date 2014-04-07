<?php
class MainBaseController extends BaseController {

	public function getHeader() {
		include ( VIEW_DIR."templates/main/header-main.php" );
	}

	public function getFooter() {
		include ( VIEW_DIR."templates/main/footer-main.php" );
	}	

	function doExecute( Request $request ) {
		include ( VIEW_DIR."default.php" );
	}
	
}
?>