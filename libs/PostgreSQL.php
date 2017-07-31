<?php
class PostgreSQL implements iWorkData
{
    public function __construct()
    {
        $host = "localhost";
        $user = "user1";
        $pass = "user1";
        $db = "user1";
        $connection = pg_connect("host=$host dbname=$db user=$user password=$pass");
        if (!$connection)
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
    
    }
    public function deleteData($key)
    {
    
    }
}
?>
