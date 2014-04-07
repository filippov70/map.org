<?php
header( 'Content-Type: text/html; charset=utf-8' );

define( 'SITE_DIR', $_SERVER['DOCUMENT_ROOT'].'/' );
define( 'CORE_DIR', 'geoportal/core/' );
define( 'GEOPORTAL_DIR', 'geoportal/' );
define( 'VIEW_DIR', 'geoportal/view/' );


$includePath = array( CORE_DIR, GEOPORTAL_DIR );
set_include_path( get_include_path() . PATH_SEPARATOR . implode( PATH_SEPARATOR, $includePath ) );


function __autoload( $className ) {
  $path = str_replace( '_', '/', strtolower( $className ) );
  return include_once $path.'.php';
}

Geoportal::run();

//phpinfo(32);
?>