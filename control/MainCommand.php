<?php

require 'FrontCommand.php';

class MainCommand extends FrontCommand {
    
    
    function __construct() {
        parent::forward();
    }
    
    protected function fields() {
        return "";
    }

    protected function url() {
        return 'http://rutascanarias.herobo.com/RutasCanarias/view/index.php';
    }

}
