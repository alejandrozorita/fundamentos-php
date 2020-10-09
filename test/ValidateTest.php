<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('ee@ss.com');
        $this->assertTrue($email);

        $email = Validate::email('eess.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $email = Validate::url('https://alejandrozorita.me');
        $this->assertTrue($email);

        $email = Validate::url('url');
        $this->assertFalse($email);
    }
}