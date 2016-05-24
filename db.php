<?php
//$con = sqlsrv_connect("localhost","root","");
//// $con = mysql_connect("localhost","root","");
//if (!$con){
//    die('Could not connect: ' . sqlsrv_error());
//}
//sqlsrv_query("SET NAMES 'utf8'",$con);
//sqlsrv_select_db("School", $con);
//phpinfo();
$serverName = "XUEQIFANG\SQLEXPRESS";
$connectionOptions = array("Database"=>"School");
$conn = sqlsrv_connect($serverName, $connectionOptions);
//sqlsrv_query("SET NAMES 'utf8'",$conn);
if( $conn === false )
    die( print_r( sqlsrv_errors(), true));
//else $result = sqlsrv_query($conn,"select * from loginuser WHERE Username = 'testuser' AND Password = 'testuser!'");
////    echo $result;
//$row = sqlsrv_fetch_array($result);
//print_r($row);
?>