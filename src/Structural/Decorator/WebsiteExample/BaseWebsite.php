<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


/** This only implements the interface (does not extend the abstract function, so does not have the constructor) */
class BaseWebsite implements WebsiteInterface
{
    public function getPrice()
    {
        return 1000;
    }
    public function getDescription()
    {
        return "    A barebones website";
    }
}