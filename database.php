<?php
class Database
{
	// private $host="INL6XNZXC2\\SQLEXPRESS";
	// private $db_name="Testing";
	// private $db_username="sa";
	// private $db_password="ramesh@123";
	// public 	$conn;

	private $host="mydata.cutyq35doutj.ap-south-1.rds.amazonaws.com";
	private $db_name="sales";
	private $db_username="ramesh";
	private $db_password="ramesh123";
	public 	$conn;

	public function getConnection()
	{
		$this->conn=null;

		try
		{
			$this->conn = new PDO('sqlsrv:Server='.$this->host.';Database='.$this->db_name.'', $this->db_username,$this->db_password);

		}
		catch(PDOException $e)
		{
			echo "Connection error: " . $e->getMessage();
		}
		return $this->conn;
	}
}

?>