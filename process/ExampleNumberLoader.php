<?php

require 'DataLoader.php';

class ExampleNumberLoader extends DataLoader {
    
    private $statement;
    
    public function load() {
        $this->statement = "select ID from Number";
        return parent::abstractFind();
    }
    
    protected function doLoad($query) {
        while ($row = mysql_fetch_assoc($query)) {
            return $row['ID'];
        }
        return "";
    }

    protected function statement() {
        return $this->statement;
    }
}
