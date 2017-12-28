<?php
// Create connection to Oracle

function getJSONFromDB($sql){
$conn = odbc_connect("127.0.0.1", "adbms", "pass");
if (!$conn) {
   die('Erro');
}
 $result = odbc_exec($conn, $sql);
 while($row = odbc_fetch_array($result))
 {   
	// echo $row['PRODUCT_ID'], '<br/>';
	 $arr[]=$row;
 }
	return json_encode($arr);

// Close the Oracle connection
odbc_close($conn);
}	

function insertIntoDB($sql){
	$conn = odbc_connect('127.0.0.1','adbms','pass');
	//echo $sql;
	$result = odbc_exec($conn, $sql) or die(odbc_errormsg($conn));	
	odbc_close($conn);
}



	
	

?>