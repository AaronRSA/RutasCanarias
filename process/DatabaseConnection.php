<?php

class DatabaseConnection {
    
    private static $isConnected = false;
    private static $numberOfConnections = 0;
    
    protected function connect() {
        self::$numberOfConnections++;
        if (self::$isConnected) return;
        mysql_connect("mysql16.000webhost.com", "a5599462_grupoa", "grupoa7");
        mysql_select_db("a5599462_grupoa");
        mysql_query("SET NAMES 'utf8'");
        self::$isConnected = true;
        $this->didIOpenTheConnection = true;
    }
    
    protected function closeConnection() {
        if (--self::$numberOfConnections != 0) return;
        mysql_close();
        self::$isConnected = false;
        $this->didIOpenTheConnection = false;
    }
}
