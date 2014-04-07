<?php
class ArmBaseController extends BaseController {

	public function getHeader() {
		include ( SITE_DIR.VIEW_DIR."templates/arm/header-arm.php" );
	}

	public function getFooter() {
		include ( SITE_DIR.VIEW_DIR."templates/arm/footer-arm.php" );
	}	

	function doExecute( Request $request ) {
		include ( VIEW_DIR."default.php" );
	}
	
}
?>