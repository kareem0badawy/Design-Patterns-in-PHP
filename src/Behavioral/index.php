<?php

use DesignPatternsInPHP\Behavioral\Observer\Login;
use DesignPatternsInPHP\Behavioral\Observer\NotifierObserver;

require __DIR__ . './../../vendor/autoload.php';

/********************************* Begin Observer ************************************ */
function observer()
{
    $login = new Login();
    $login->attach(new NotifierObserver());
    $login->login([
        'email' => 'john@doe.com',
        'password' => 'secret'
    ]);
}
observer();
/********************************* End Observer ************************************ */