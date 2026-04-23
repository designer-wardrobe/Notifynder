<?php

use Fenos\Notifynder\Collections\Config;

class HelpersTest extends NotifynderTestCase
{
    public function testNotifynderConfig()
    {
        $this->assertInstanceOf(Config::class, notifynder_config());
    }

    public function testNotifynderConfigGet()
    {
        $this->assertIsBool(notifynder_config('polymorphic'));
    }
}
