<?php
class PostgreSQL implements iWorkData
{
    public $connection;
    public function __construct()
    {
        $host = "localhost";
        $user = "user1";
        $pass = "user1z";
        $db = "user1";
        $this->connection = pg_connect("host=$host dbname=$db user=$user password=$pass");
        if (!$this->connection)
        {
            die("Could not open connection to database server");
        }else
        {
            echo "Connect";
        }
    
    }
    public function saveData($key, $val)
    {
    
    }
    
    public function getData($key)
    { 
        $x = array();
        $result = pg_query($this->connection, "SELECT * FROM pg_test");
        while ( $row = pg_fetch_row($result) ){
        
        }
    }
    public function deleteData($key)
    {
    
    }
}
?>
