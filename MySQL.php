<?php
class MySQL implements iWorkData
{
    private $user;
    private $password;
    private $host;
    private $dB;
    private $conn;
    public function __construct()
    {
        $this->user = "user1";
        $this->dB = "user1";
        $this->host = "localhost";
        $this->password = "tuser1";
    
    }
    private function dbconnect() {
    $this->conn = mysql_connect($this->host, $this->user, $this->password) or die ("<br/>cant connect to  MySQL");
		
    mysql_select_db($this->dB,$conn) or die ("<br/>DB not found");
	
	return $this->conn;
  }
    public function saveData($key, $val)
    {
    
    }
    
    public function getData($key)
    {
    
    }
    public function deleteData($key)
    {
    
    }
}
?>
