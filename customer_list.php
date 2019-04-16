<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('database.php');
include('customer.php');

$database = new Database();
$db = $database->getConnection();

$customer = new Customer($db);
$stmt = $customer->read()->fetchAll();
$num=count($stmt);
// print_r($stmt);

if($num > 0)
{
    $customer_arr=array();
    $customer_arr["records"]=array();

    foreach ($stmt as $key => $row) 
    {
    	
    	$customer_list=array(
            "customer_id" => $row['customer_id'],
            "first_name" => $row['first_name'],
            "last_name" => $row['last_name'],
            "phone" => $row['phone'],
            "email" => $row['email'],
            "city" => $row['city']
        );
 		array_push($customer_arr["records"], $customer_list);
    }

    http_response_code(200);
    echo json_encode($customer_arr);
}
else
{
 
	http_response_code(404);
    echo json_encode(
        array("message" => "No customer found.")
    );
}
?>