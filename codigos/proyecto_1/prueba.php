<?php

require_once 'vendor/autoload.php';

$User = new \PlatziPHP\User('fake.email@foo.dev', '1234');

$User->setName('Luis','Herrera');

var_dump($User);
