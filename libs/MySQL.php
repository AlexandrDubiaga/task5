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
        mysql_select_db($this->dB,$this->conn) or die ("<br/>DB not found");
        return $this->conn;
  }
    public function saveData($key, $val)
    {
        if (!empty($key) && !empty($val))
        {
            $result = mysql_query('INSERT into MY_TEST VALUES("' . $key . '","' . $val . '")')  or die("Something wrong");
            echo "Good data added<br>";
        }
    }
    
    public function getData($key)
    {
	  
        if (!empty($key)){
            $result = mysql_query("SELECT * FROM MY_TEST WHERE `key`=\"$key\" ") or die("Something wrong with query");
            while($row[] = mysql_fetch_array($result, MYSQL_ASSOC)){ }
        }else echo mysql_error();
	return $row;
    }
    public function deleteData($key)
    {
    	$delete = mysql_query("DELETE  FROM MY_TEST WHERE `key`=\"$key\" ") or die("Cant delete something wrong");
    }
}
?>
