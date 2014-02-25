<?php

require 'DatabaseConnection.php';

abstract class DataLoader extends DatabaseConnection{

    protected function abstractFind() {
        parent::connect();
        $object = $this->doLoad(mysql_query($this->statement()));
        parent::closeConnection();
        return $object;
    }

    protected abstract function statement();

    protected abstract function doLoad($query);
}