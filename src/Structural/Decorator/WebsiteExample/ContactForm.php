<?php

namespace DesignPatternsInPHP\Structural\Decorator\WebsiteExample;


class ContactForm extends AbstractWebsiteFeature
{
    public function getPrice()
    {
        return 150 + $this->website->getPrice();
    }
    public function getDescription()
    {
        return $this->website->getDescription() . ",\n    and adding a contact form";
    }
}