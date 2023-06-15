<?php

namespace Andriih\Dns\Tests;

use PHPUnit\Framework\TestCase;
use Andriih\Dns\DnsCheckService;

class DnsCheckServiceTest extends TestCase
{
    public function testValidHostname(): void
    {
        $service = new DnsCheckService();

        $result = $service->getDnsRecords('google.com');

        $this->assertTrue(!empty($result));
    }

    public function testInvalidHostname(): void
    {
        $service = new DnsCheckService();

        $result = $service->getDnsRecords('<script></script>');

        $this->assertEquals($result, []);
    }
}