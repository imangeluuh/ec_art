<?php  
    $serverName = "localhost\SQLEXPRESS"; 
    $databaseName = "ECArt"; 

    $connectionInfo = array("Database"=>$databaseName); 

    /* Connect using SQL Server Authentication. */  
    $conn = sqlsrv_connect($serverName, $connectionInfo);  
    if( $conn === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
?>