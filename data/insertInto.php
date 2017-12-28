<?php
function insertIntoDB($sql){
	$conn = odbc_connect('127.0.0.1','adbms','pass');
	//echo $sql;
	$result = odbc_exec($conn, $sql) or die(odbc_errormsg($conn));	
	odbc_close($conn);
}
?>