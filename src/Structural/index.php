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
use DesignPatternsInPHP\Structural\Decorator\InternationalShipping;
 
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

function facade()
{
    $message = 'New video is here!';

    $facebook = new Facebook($message);
    $twitter = new Twitter($message);

    Share::to($facebook, $twitter, null);
}

facade();