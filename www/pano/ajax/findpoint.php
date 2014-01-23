<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/pano/lib/db.php";

DB::init();

$PointLon = $_POST["PointLon"];
$PointLat = $_POST["PointLat"];
$PgrFile  = $_POST["PgrFile"];

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
    echo $Frame.'/'.$Azimuth.'/'.$PgrFile.'/'.$Lat.'/'.$Lon; 
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
    echo $Frame.'/'.$Azimuth.'/'.$PgrFile.'/'.$Lat.'/'.$Lon; 
}

?>





























