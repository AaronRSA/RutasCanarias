<?php

$command = $_GET['command']."Command";
require $command.'.php';
$frontCommand = new $command();
$frontCommand->process();