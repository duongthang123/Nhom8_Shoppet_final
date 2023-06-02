<?php 

class DatabaseConnection
{
    private static $connection = null;

    public static function getInstance()
    {
        if(self::$connection === null) {
            try{
                self::$connection = new mysqli("localhost", "root", "", "webbanhang");
            } catch(Exception $e){
                return 0;
            };
        }
        return self::$connection;
    }
}