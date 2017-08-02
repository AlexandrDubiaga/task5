<?php
class Session implements iWorkData
{
    public function saveData($key, $val)
    {   
        if(!$key || !$val || empty($key) || empty($val))
        {
            return false;
        }
        if(isset($key) && isset($val))
        {
            return  $_SESSION[$key] = $val;
        }
        return false;
    }
    public function getData($key)
    {
        if(isset($key) || isset($_SESSION[$key]) || !empty($key))
        {
            return $_SESSION[$key];
        }return false;
    
    }
    public function deleteData($key)
    {
        if(!empty($key)) {
            unset($_SESSION[$key]);
            session_destroy();
            return true;
        }return false;
    }
}
?>
