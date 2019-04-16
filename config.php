<?php 
	
	$host="INL6XNZXC2\\SQLEXPRESS";
	$db_name="Testing";
	$db_username="sa";
	$db_password="ramesh@123";


	try
    {
        
        $pdo = new PDO('sqlsrv:Server='.$host.';Database='.$db_name.'', $db_username,$db_password);  
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }


?>