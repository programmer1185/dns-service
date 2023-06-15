# dns-service
This library allows to get all DNS records for the specified domain name.

## Instalation

```sh
composer require andriih/dns-service
```

## Usage

```sh
<?php

use Andriih\Dns\DnsCheckService;

$service = new DnsCheckService();
$result = $service->getDnsRecords("gmail.com");

print_r($result);

[
    ["type" => "A", "name" => "gmail.com", "ttl" => "3360", "data" => "142.250.1.19"],
    ["type" => "TXT", "name" => "gmail.com", "ttl" => "18640", "data" => "globalsign-smime-dv=CDYX+XFHUw2wml6/Gb8+59BsH31KzUr6c1l2BPvqKX8="],
    ...
];
```
