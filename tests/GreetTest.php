<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Suntiparb\Greet;

class GreetTest extends TestCase
{
    public function testGreet()
    {

        $greet = new Greet();
        $message = $greet->greet();

        $this->assertSame("Say Hello", $message);
    }
}
