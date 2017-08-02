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
            return true;
        }
    
    }
    public function saveData($key, $val)
    {
        if (!empty($key) && !empty($val))
        {
            $result = pg_query("INSERT into pg_test(key,data) VALUES('$key','$val')")  or die("Something wrong");
            if($result)
	        {
	    	    return true;
	        }
        }
    
    }
    
    public function getData($key)
    {
        $array = array();
        $result = pg_query($this->connection, "SELECT * from pg_test WHERE key='$key' ");
        while ($row[] = pg_fetch_assoc($result)) 
        {}
        return $row;
    }
    public function deleteData($key)
    {
        $delete = pg_query("DELETE  FROM pg_test WHERE key='$key' ") or die("Cant delete something wrong");
        if($delete)
	    {
	    	   return true;
	    }
    }
}
?>
