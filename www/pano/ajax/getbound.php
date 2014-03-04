<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pano/lib/db.php";

DB::init();

$title = $_POST['title'];

getBound($title);

function getBound($param){

	if ($param != '')	{

		$str = 'select * from "RoadInternodalSegment" where "TitleName" like \'%'.$param.'%\'';

		$result = DB::query("
								select 
								min(ST_XMin(geom_ln)) as st_xmin,
								min(ST_YMin(geom_ln)) as st_ymin,
								max(ST_XMax(geom_ln)) as st_xmax,
								max(ST_YMax(geom_ln)) as st_ymax
								from ($str) AS foo
								");		

		$row = DB::fetchAssoc($result);

		if (!empty($row['st_xmin']) && !empty($row['st_ymin']) && !empty($row['st_xmax']) && !empty($row['st_ymax'])){
			echo $row['st_xmin'] . "," . $row['st_ymin'] . "," . $row['st_xmax'] . "," . $row['st_ymax'];
		}else{
			echo 'err';
		}
	}else{
		echo 'err';
	}
}

?>