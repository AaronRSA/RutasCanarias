<?php

class DatabaseConnection {
    
    private static $instance;
    
    private $isConnected = false;
    private $numberOfConnections = 0;
    
    private function __construct() {
    }
    
    public static function getInstance() {
        if (self::$instance == null) self::$instance = new DatabaseConnection ();
        return self::$instance;
    }
    
    public function connect() {
        $this->numberOfConnections++;
        if ($this->isConnected) return;
        mysql_connect("mysql16.000webhost.com", "a5599462_grupoa", "grupoa7");
        mysql_select_db("a5599462_grupoa");
        mysql_query("SET NAMES 'utf8'");
        $this->isConnected = true;
        $this->didIOpenTheConnection = true;
    }
    
    public function closeConnection() {
        if (--$this->numberOfConnections != 0) return;
        mysql_close();
        $this->isConnected = false;
        $this->didIOpenTheConnection = false;
    }
}
