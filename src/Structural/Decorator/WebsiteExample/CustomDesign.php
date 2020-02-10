<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


/** But this (and all others below it) extends the abstract class, so the constructor is there. They must implement the abstract methods too.*/
class CustomDesign extends AbstractWebsiteFeature
{
    public function getPrice()
    {
        return 2000 + $this->website->getPrice();
    }
    public function getDescription()
    {
        return $this->website->getDescription() . ",\n    and a completely custom design, designed by an in-house designer";
    }
}