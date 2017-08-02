<?php
class Cookie implements iWorkData
{
    public function saveData($key, $val)
    {
        if(!$key || !$val || empty($key) || empty($val)){
            return false;
        }
        if(isset($key) && isset($val))
        {
            setcookie("$key", "$val", time() + 3600);
            return true;
        }
        return false;
    }
    
    public function getData($key)
    {
        if(!$key || empty($key))
        {
            return false;
        }
        if(isset($key) && !empty($key))
        {
            return $_COOKIE[$key];
        }
        return false;
    }
    public function deleteData($key)
    {
        if(!$key || empty($key)){
            return false;
        }
        if(isset($key) && !empty($key))
        {
            unset ($_COOKIE [$key]);
            return true;
         }
         return false;
    }
}
?>
