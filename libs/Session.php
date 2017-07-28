<?php
class Session implements iWorkData
{
    public function saveData($key, $val)
    {   
        if(!$key || !$val){
            return false;
        }
        if(isset($key))
        {
        $_SESSION[$key] = $val;
            return true;
        }
    }
    
    public function getData($key)
    {
        if(isset($key) || isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
    
    }
    public function deleteData($key)
    {
        unset($_SESSION[$key]);
        return true;
    }
}
?>
