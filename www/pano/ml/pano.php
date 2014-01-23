<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/pano/lib/db.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/pano/ajax/functions.php";

DB::init();

$url_script = "/pano/ml/pano.php?uriParam=";
$webapp_url = "";
$prefix     = "/pano/ml/";
$sufix_xml  = ".xml";
$sufix_html = ".html";
$uri        = $_REQUEST["uriParam"];
$err        = "";

if (isset($_REQUEST["pr"])) {           
    $pr = $_REQUEST["pr"];
}
if (isset($_REQUEST["nx"])) {           
    $nx = $_REQUEST["nx"];
}

if( substr($uri, 0, strlen($prefix))==$prefix ){
    $uri = substr($uri, strlen($prefix));
}else{
    $err = "no prefix";
} 

$KadrInfo           = substr($uri, 0, strlen($uri)-strlen($sufix_xml)); 
$arNextKadrInfo     = FindNextKadr($KadrInfo);
$LatOfCurrentKadr   = $arNextKadrInfo['LatOfCurrentKadr'];
$LonOfCurrentKadr   = $arNextKadrInfo['LonOfCurrentKadr']; 
$CurrentScene       = $arNextKadrInfo['ScenenoOfCurrentKadr'];
$PiketOfCurrentKadr = $arNextKadrInfo['PiketOfCurrentKadr'];
$TitleOfCurrentKadr = $arNextKadrInfo['TitleOfCurrentKadr'];
$next_frameno       = $arNextKadrInfo['next_frameno'][0];  
$prev_frameno       = $arNextKadrInfo['prev_frameno'][0]; 
$ScenenoPrev        = $arNextKadrInfo['ScenenoPrev'][0]; 
$ScenenoNext        = $arNextKadrInfo['ScenenoNext'][0];
$ScenoName          = $arNextKadrInfo['ScenoName'];

$uri = substr($uri, 0, strlen($uri)-strlen($sufix_html));
list($sceneno, $frameno, $Azimuth) = explode("_", $uri);
//$sceneno = '21';
//$frameno = '001632';
$uri     = $sceneno."_".$frameno;
$frameno = str_replace("_", "/", $uri);  

?>

<html>
    <head>
    	<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    	<meta name="apple-mobile-web-app-capable" content="yes" />
    	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <meta http-equiv="x-ua-compatible" content="IE=edge" />
    	<style>
            @media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
            html { height:100%; }
            body { height:100%; overflow: hidden; margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; 
                font-size:16px; color:#000000; background-color:#FFFFFF; }
            a{ color:#AAAAAA; text-decoration:underline; }
            a:hover{ color:#FFFFFF; text-decoration:underline; }        
    	</style>
    </head>

    <!--body onload = "start()"-->
    <body>
        <input type = "hidden" name ="LatOfCurrentKadr" id = "LatOfCurrentKadr" value = "<?=$LatOfCurrentKadr?>"> 
        <input type = "hidden" name ="LonOfCurrentKadr" id = "LonOfCurrentKadr" value = "<?=$LonOfCurrentKadr?>">
        <input type = "hidden" name ="CurrentScene" id = "CurrentScene" value = "<?=$CurrentScene?>">
        <input type = "hidden" name ="next_click" id = "next_click" value = "<?=$nx?>">
        <input type = "hidden" name ="prev_click" id = "prev_click" value = "<?=$pr?>">
                            
        <script src = "swfkrpano.js"></script>

        <div id = "pano" style = "width:100%; height:100%;">

            <noscript>
                <table style = "width:100%;height:100%;">
                    <tr style = "valign:middle;">
                        <td>
                            <div style = "text-align:center;">
                                ERROR:<br/><br/>Javascript not activated<br/><br/>
                            </div>
                        </td>
                    </tr>
                </table>
            </noscript>

            <script>
                embedpano({
                    swf: "pano.swf",
                    id: "krpanoSWFObject",
                    target: "pano",
                    onready:krpanoReady,
                    wmode: "opaque",
                    bgcolor: "#FFFFFF"
                });

                function krpanoReady(krpano){
                    krpano.call("loadxml(" + xmlPano + ", null);");
                }

                /*
                function krpano() {
                    return document.getElementById("krpanoSWFObject");
                }

                function start() {
                    krpano().call("loadxml(" + xmlPano + ", null);");
                }*/

                var xmlPano =
                    '<krpano version ="1.0.8.14" onstart="action(startscene);" idletime="5">'+

                        '<view ' +
                            'hlookat      ="<?=$Azimuth?>" ' +
                            'vlookat      ="0" ' +
                            'fovtype      ="MFOV" ' +
                            'fov          ="90" ' +
                            'maxpixelzoom ="1.0" ' +
                            'fovmax       ="120"  ' +
                            'limitview    ="auto" ' +
                        '/>' +

                        '<preview ' +
                            'url = "<?=$webapp_url?>/pano/ajax/phptojpg.php?jpgname=preview.jpg&frameno=<?=$frameno?>" ' +
                        '/>' +

                        '<image>' +

                            '<cube url = "<?=$webapp_url?>/pano/ajax/phptojpg.php?jpgname=pano_%s.jpg&frameno=<?=$frameno?>" />' +

                            '<mobile>' +
                                    '<cube url = "<?=$webapp_url?>/pano/ajax/phptojpg.php?jpgname=pano_%s.jpg&frameno=<?=$frameno?>"/>' +
                            '</mobile>' +

                            '<tablet>' +
                                    '<cube url = "<?=$webapp_url?>/pano/ajax/phptojpg.php?jpgname=pano_%s.jpg&frameno=<?=$frameno?>"/>' +
                            '</tablet>' +

                        '</image>  ' +
                         
                        '<style ' +
                            'name       ="hotspot_ani_black"' +
                            'url        ="/geoext/theme/app/image/hotspot_ani_black.png"' +
                            'crop       ="0|0|64|64"' +
                            'framewidth ="64" frameheight="64" frame="0" lastframe="19"' +
                            'onloaded   ="hotspot_animate();"' +
                        '/>' +

                        '<action name ="hotspot_animate">' +
                            'inc(frame,1,get(lastframe),0);' +
                            'mul(ypos,frame,frameheight);' +
                            'txtadd(crop,"0|",get(ypos),"|",get(framewidth),"|",get(frameheight));' +
                            'delayedcall(0.03, if(loaded, hotspot_animate() ) );' +
                        '</action>' +

                        '<hotspot ' +
                            'name    ="next" ' +
                            'style   ="hotspot_ani_black" ' +
                            'ath     ="0" ' +
                            'atv     ="-3" ' +
                            'onclick ="looktohotspot(next); openurl(<?=$url_script.$ScenenoNext."_".$next_frameno?>.html&nx=nx, _self);"' +
                        '/>' +
                            
                        '<hotspot ' +
                            'name    ="back" ' +
                            'style   ="hotspot_ani_black" ' +
                            'ath     ="180" ' +
                            'atv     ="-3" ' +
                            'onclick ="looktohotspot(back); openurl(<?=$url_script.$ScenenoPrev."_".$prev_frameno?>.html&pr=pr, _self);"' +
                        '/>' +

                        '<action name ="dragcursor">' +
                            'set(control.mousetype, drag2D);' +
                            'set(cursors.url, /geoext/theme/app/image/drag-cursors.png);' +
                            'set(cursors.type, drag);' +
                            'set(cursors.move,  2|0|30|32);' +
                            'set(cursors.drag, 37|0|30|32);' +
                        '</action>' +
                            
                        '<action name ="startscene">' +
                            'action(dragcursor);' +
                        '</action>  ' +                                                                                                                                                                                 
                    '</krpano>';                
            </script>
        </div>
    </body>
</html>