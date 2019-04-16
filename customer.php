<?php

  // include('config.php');
  // include('database.php');
  // $db = new Database($pdo);
  // $rows= $db->getData();
  // echo "<pre>".print_r($rows)."</pre>";

	class Customer
	{
		private $conn;
    	private $table_name = "customers";
	
    	public function __construct($db)
    	{
    		$this->conn= $db;
    	}

    	public function read()
    	{
    		$query="select * from ". $this->table_name ."";
    		
    		$stmt = $this->conn->prepare($query);
    		$stmt->execute();
    		
    		// return $stmt->fetchAll();
    		return $stmt;
    	}

	}
?>