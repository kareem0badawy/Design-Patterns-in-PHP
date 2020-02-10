<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


abstract class AbstractWebsiteFeature implements WebsiteInterface
{
    protected $website;
    public function __construct(WebsiteInterface $website)
    {
        $this->website = $website;
    }
    abstract public function getPrice(); // must be implemented by child class
    abstract public function getDescription(); // must be implemented by child class
}