<?php

require 'DatabaseConnection.php';

abstract class DataLoader {

    protected function abstractFind() {
        $connection = DatabaseConnection::getInstance();
        $connection->connect();
        $object = $this->doLoad(mysql_query($this->statement()));
        $connection->closeConnection();
        return $object;
    }

    protected abstract function statement();

    protected abstract function doLoad($query);
}