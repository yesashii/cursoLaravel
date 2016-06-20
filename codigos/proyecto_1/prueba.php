<?php

require_once 'vendor/autoload.php';

$user = new \PlatziPHP\User('fake.email@foo.dev', '1234');

$user->setName('Luis','Herrera');

$primer_nombre = $user->getFistName();

echo $primer_nombre;

//var_dump($user);

