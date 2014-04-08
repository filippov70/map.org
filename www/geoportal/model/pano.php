<?php
class model_Pano extends AjaxBaseModel {

	public function doResponse ( Request $request ) {	

		$PointLon = $request -> getProperty("PointLon");
		$PointLat = $request -> getProperty("PointLat");
		$PgrFile  = $request -> getProperty("PgrFile");

		$point = $this -> findPoint( 37.78829302581969, 55.451324471739085, 0 );

		return $point;
	}

	private function findPoint( $PointLon, $PointLat, $PgrFile ) {

		DB::init();

		if ($PgrFile <> 'radar'){
		    $Query = "SELECT frame_no, azimuth, pgr_file, lat, lon, SQRT(POW($PointLon-lon,2)+POW($PointLat-lat,2)) AS distance 
		                FROM pano, pgr_file 
		                WHERE pgr_file.direction = 1 AND pano.pgr_file = pgr_file.id
		                ORDER BY distance ASC 
		                LIMIT 1";
		    $Result = DB::query($Query);   
		    while($Set = DB::fetchAssoc($Result)){
		        $Frame   = $Set["frame_no"];
		        $Azimuth = $Set["azimuth"];
		        $PgrFile = $Set["pgr_file"];
		        $Lat     = $Set["lat"];
		        $Lon     = $Set["lon"];
		    }
		    $Frame = str_pad($Frame, 6, "0", STR_PAD_LEFT);
		    return $Frame.'/'.$Azimuth.'/'.$PgrFile.'/'.$Lat.'/'.$Lon; 
		}
		elseif ($PgrFile == 'radar'){
		    $Query = "SELECT frame_no, azimuth, pgr_file, lat, lon,  SQRT(POW($PointLon-lon,2)+POW($PointLat-lat,2)) AS distance 
		            FROM pano, pgr_file 
		            WHERE pgr_file.direction = 1 AND pano.pgr_file = pgr_file.id
		            ORDER BY distance ASC 
		            LIMIT 1";
		           
		    $Result = DB::query($Query);   
		    while($Set = DB::fetchAssoc($Result)){
		        $Frame   = $Set["frame_no"];
		        $Lat     = $Set["lat"];
		        $Lon     = $Set["lon"];
		        $PgrFile = $Set["pgr_file"];
		        $Azimuth = $Set["azimuth"];
		    }
		    $Frame = str_pad($Frame, 6, "0", STR_PAD_LEFT);   
		    return $Frame.'/'.$Azimuth.'/'.$PgrFile.'/'.$Lat.'/'.$Lon; 
		}
	}
	
}
?>