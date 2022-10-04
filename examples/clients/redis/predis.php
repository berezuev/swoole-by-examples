#!/usr/bin/env php
<?php

declare(strict_types=1);

/**
 * This client-side script is to use predis to test the Redis server created in this repository. For details, please
 * check comments in script https://github.com/deminy/swoole-by-examples/blob/master/examples/servers/redis.php.
 *
 * You can use following command to run this script:
 *     docker compose exec -t client bash -c "./clients/redis/predis.php"
 */
require_once "{$_ENV['HOME']}/vendor/autoload.php";
$client = new Predis\Client(['scheme' => 'tcp', 'host' => 'server', 'port' => 6379]);
echo $client->set('foo', 'bar'), PHP_EOL;
echo $client->get('foo'), PHP_EOL;
