<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


class WordPressBlog extends AbstractWebsiteFeature
{
    public function getPrice()
    {
        return 750 + $this->website->getPrice();
    }
    public function getDescription()
    {
        return $this->website->getDescription() . ",\n    and setting everything up with a WordPress blog";
    }
}