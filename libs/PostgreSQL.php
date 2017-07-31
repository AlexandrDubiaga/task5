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
        $array = array();
        $result = pg_query($this->connection, "SELECT * FROM pg_test");
       while ($row = pg_fetch_assoc($result)) {
           var_dump $row; 
        }
    }
    public function deleteData($key)
    {
    
    }
}
?>
