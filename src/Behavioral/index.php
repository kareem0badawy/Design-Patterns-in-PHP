<?php

use DesignPatternsInPHP\Behavioral\Observer\Login;
use DesignPatternsInPHP\Behavioral\Strategy\AmazonS3Saver;
use DesignPatternsInPHP\Behavioral\Strategy\DatabaseSaver;
use DesignPatternsInPHP\Behavioral\Strategy\LocalFileSaver;
use DesignPatternsInPHP\Behavioral\Strategy\SaverInterface;
use DesignPatternsInPHP\Behavioral\Strategy\CouponGenerator;
use DesignPatternsInPHP\Behavioral\Observer\NotifierObserver;
use DesignPatternsInPHP\Behavioral\Strategy\BmwCouponGenerator;
use DesignPatternsInPHP\Behavioral\Strategy\MercedesCouponGenerator;

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
// observer();
/********************************* End Observer ************************************ */


/********************************* Begin Strategy ************************************ */
// Create object from the alternative classes.
function couponObjectGenerator($car)
{
  if($car == "bmw")
  {
    $carObj = new BmwCouponGenerator;
  }
  else if($car == "mercedes")
  {
    $carObj = new MercedesCouponGenerator;
  }
      
  return $carObj;
}

// Test the code.
$car = "bmw";
$carObj = couponObjectGenerator($car);
$couponGenerator = new CouponGenerator($carObj);
echo $couponGenerator->getCoupon();
  
echo "<hr />";
    
$car = "mercedes";
$carObj = couponObjectGenerator($car);
$couponGenerator = new CouponGenerator($carObj);
echo $couponGenerator->getCoupon();
/********************************* End Strategy ************************************ */