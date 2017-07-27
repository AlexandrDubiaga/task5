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
   
	
    public function dbconnect() {
    $this->conn = mysql_connect($this->host, $this->user, $this->password) or die ("<br/>cant connect to  MySQL");
    if($this->conn){
    	echo "Connect to DataBase";
    }
		
    mysql_select_db($this->dB,$this->conn) or die ("<br/>DB not found");
	
	return $this->conn;
  }
    public function saveData($key, $val)
    {
    $result = mysql_query('INSERT into MY_TEST VALUES("' . $key . '","' . $val . '")');
	    echo mysql_error();
	    if($result){
	    	echo "Data insertes";
	    }else "No insert";
    }
    
    public function getData($key)
    {
    
    }
    public function deleteData($key)
    {
    
    }
}
?>
