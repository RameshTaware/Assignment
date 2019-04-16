<?php

$serverName = "INL6XNZXC2\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Testing", "UID"=>"sa", "PWD"=>"ramesh@123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$tsql = "SELECT * FROM customers";    
$stmt = sqlsrv_query( $conn, $tsql);    
if ( $stmt )    
{    
     echo "Statement executed.<br>\n";    
}     
else     
{    
     echo "Error in statement execution.\n";    
     die( print_r( sqlsrv_errors(), true));    
}    

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))    
{    
     print_r($row);   
}    

sqlsrv_close( $conn );
?>