<?php

namespace DesignPatternsInPHP\Structural\Proxy;

class LabDoor implements DoorInterface
{
    public function open()
    {
        echo "Opening lab door <br/>";
    }

    public function close()
    {
        echo "Closing the lab door";
    }
}