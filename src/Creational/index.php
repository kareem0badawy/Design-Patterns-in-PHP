<?php

use DesignPatternsInPHP\Creational\AbstractFactory\ParserFactory;


require __DIR__ . './../../vendor/autoload.php';

function abstractFactory()
{
    $factory = new ParserFactory();
    $csvParser = $factory->createCSVParser();

    print_r($csvParser->parse('firstName,lastName,email,phoneNumber
                    John,Doe,john@doe.com,0123456789
                    Jane,Doe,jane@doe.com,9876543210
                    James,Bond,james.bond@mi6.co.uk,0612345678'));

    $jsonParser = $factory->createJSONParser();

    print_r($jsonParser->parse('[{"seq":1,"first":"Minnie","last":"Barber","age":38,"street":"Ovubiv Terrace","city":"Nuowuok","state":"NE","zip":53897,"dollar":"$3224.07","pick":"WHITE","date":"09/29/1971"},{"seq":2,"first":"May","last":"Cummings","age":59,"street":"Lukek Heights","city":"Ulrelam","state":"VT","zip":4755,"dollar":"$9409.65","pick":"RED","date":"12/08/2063"}]'));

    $xmlParser = $factory->createXMLParser();

    print_r($xmlParser->parse('<?xml version="1.0" encoding="UTF-8"?><note><to>Tove</to><from>Jani</from><heading>Reminder</heading><body>Don\'t forget me this weekend!</body></note>'));
}
abstractFactory();
