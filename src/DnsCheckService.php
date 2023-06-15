<?php

namespace Andriih\Dns;

class DnsCheckService {

    public function getDnsRecords(string $hostname): array
    {
        if (!$this->checkValidHostname($hostname)) {
            return [];
        }

        return dns_get_record($hostname);
    }

    private function checkValidHostname(string $hostname): bool
    {
        return filter_var(gethostbyname($hostname), FILTER_VALIDATE_IP) ? true : false;
    }
}