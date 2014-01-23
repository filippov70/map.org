<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pano/lib/db.php";

DB::init();

$url    = $_REQUEST["url"];
$count  = count($_REQUEST['url']);
$layers = array();

for($i = 0; $i < $count; $i++){
    foreach($_REQUEST['url'][$i] as $key => $value){
        if ($key == 'layers') {
            array_push($layers,array_pop($value));            
        }else{
            $arrUrl[$key] = $value;
        }
    }
}
$arrUrl['layers'] = $layers;

$strUrl    = json_encode($arrUrl);
$operation = $_REQUEST["operation"];

if ($operation == 'encode') {
	$query  = "INSERT INTO permalink (url) VALUES ('".$strUrl."') RETURNING id";
	$result = DB::query($query);  

    if($set = DB::fetchAssoc($result)){
        $responseUrl  = $set["id"];
    }else{
    	$responseUrl = '';
    }
}

if ($operation == 'decode') {
	$id     = $_REQUEST["id"];
	$query  = "SELECT url FROM permalink WHERE id = ".$id;
	$result = DB::query($query);  
  
    if($set = DB::fetchAssoc($result)){
        $responseUrl  = $set["url"];
    }else{
    	$responseUrl = '';
    }
}

echo $responseUrl;
?>