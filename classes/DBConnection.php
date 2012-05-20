<?php
class DBConnection
{
	private static $instance = null;
	private $id = 0;
	static function getInstance($host,$user,$pass,$dbName)
	{
		if (self::$instance == null)
		{
			self::$instance = new DBConnection(mysql_connect($host,$user,$pass));
			selectDB($dbName);
		}
		return self::$instance;
	}
	public function changeSelectDB($name)
	{
		mysql_select_db($name,$id);
	}
	public function addQuery($sql)
	{
		mysql_query($sql) or die(mysql_error());
	}
	public function getID()
	{
	return $this->id;
	}
	private function __construct($id)
	{
		$this->id = $id;
	}
	private function __clone()
	{
	}

}
?>