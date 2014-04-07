<?php
class AjaxBaseController extends BaseController {

	function doExecute( Request $request ) {
		include ( VIEW_DIR."default.php" );
	}

	public function getHeader() {}

	public function getFooter() {}		
	
}
?>