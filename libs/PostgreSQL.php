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
        $result = pg_query($this->connection, "SELECT * FROM pg_test WHERE key=\"$key\" ");
        if (!$result) {
            echo "Error postgre_query.\n";
            exit;
        }
        while ($row = pg_fetch_row($result)) {
            echo "Key: ".$row['key']." "."Data: ".$row['data'];
        }
    
    }
    public function deleteData($key)
    {
    
    }
}
?>
