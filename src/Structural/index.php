<?php

use DesignPatternsInPHP\Structural\Facade\Share;
use DesignPatternsInPHP\Structural\Facade\Devlob;
use DesignPatternsInPHP\Structural\Adapter\PayPal;
use DesignPatternsInPHP\Structural\Adapter\Stripe;
use DesignPatternsInPHP\Structural\Facade\Twitter;
use DesignPatternsInPHP\Structural\Facade\Facebook;
use DesignPatternsInPHP\Structural\Decorator\Parcel;
use DesignPatternsInPHP\Structural\Adapter\PayPalAdapter;
use DesignPatternsInPHP\Structural\Adapter\StripeAdapter;
use DesignPatternsInPHP\Structural\Facade\anotherOne\Computer;
use DesignPatternsInPHP\Structural\Decorator\InternationalShipping;
use DesignPatternsInPHP\Structural\Facade\anotherOne\ComputerFacade;
 
require __DIR__ . './../../vendor/autoload.php';

function decorator()
{
    $parcel = new Parcel(10, 'A Supreme t-shirt');
    $parcel = new InternationalShipping($parcel);

    echo "{$parcel->getDescription()} for \${$parcel->calculatePrice()}.";
}

// decorator();

function adapter()
{
    $payPal = new PayPalAdapter(new PayPal());
    echo $payPal->pay(10);

    $stripe = new StripeAdapter(new Stripe());
    echo $stripe->pay(10);
}

// adapter();


/*********************************Begin Facade************************************ */
function facade()
{
    $message = 'New video is here!';

    $facebook = new Facebook($message);
    $twitter = new Twitter($message);

    Share::to($facebook, $twitter, null);
}

// facade();

//  another one example

function turnOnAndOfComputer()
{
    $computer = new ComputerFacade(new Computer());
    $computer->turnOn(); echo '<br>'; // Ouch! Beep beep! Loading.. Ready to be used!
    $computer->turnOff(); // Bup bup buzzz! Haah! Zzzzz
}

turnOnAndOfComputer();

/*********************************End Facade************************************ */
