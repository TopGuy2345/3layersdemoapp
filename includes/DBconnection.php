<?php


$SERVER="";

$Connectioninfo=array('Database'=>'Northwind',"UID"=>"cesar","PWD"=>"");
$link = sqlsrv_connect($SERVER,$Connectioninfo);
class DBConnection{
function connect($SERVER,$Connectioninfo,$link){

if( $link ) {
     echo "";
   }
   else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));

   }}}

?>
