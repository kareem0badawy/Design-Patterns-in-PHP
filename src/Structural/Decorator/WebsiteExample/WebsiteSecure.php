<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


/** But this (and all others below it) extends the abstract class, so the constructor is there. They must implement the abstract methods too.*/
class WebsiteSecure extends AbstractWebsiteFeature
{
    public function getPrice()
    {
        return 550 + $this->website->getPrice();
    }
    public function getDescription()
    {
        return $this->website->getDescription() . ",\n    and add Https To Website, that make Website Secure";
    }
}