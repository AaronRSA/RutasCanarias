<?php

$command = $_GET['command']."Command";
require $command.'.php';
new $command();