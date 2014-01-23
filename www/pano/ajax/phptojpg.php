<?php
	$frameno = $_REQUEST['frameno'];
	$jpgname = $_REQUEST['jpgname'];

    $url = 'http://maps.indorsoft.ru/rasters/layer.pano.view/'.$frameno.'/'.$jpgname;

    $image = imagecreatefromjpeg($url);
    header("Content-type: image/jpg");
    imagejpeg($image);
?>