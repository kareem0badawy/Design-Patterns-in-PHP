<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


class YearHosting extends AbstractWebsiteFeature
{
    public function getPrice()
    {
        return (12 * 30) + $this->website->getPrice();
    }
 
    public function getDescription()
    {
        return $this->website->getDescription() . ",\n    including a year's hosting";
    }
}