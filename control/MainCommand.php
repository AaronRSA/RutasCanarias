<?php

require 'FrontCommand.php';

class MainCommand extends FrontCommand {
    
    
    function process() {
        parent::forward();
    }
    
    protected function fields() {
        return "";
    }

    protected function url() {
        return 'http://rutascanarias.herobo.com/RutasCanarias/view/index.php';
    }

}
