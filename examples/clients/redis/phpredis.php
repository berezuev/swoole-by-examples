#!/usr/bin/env php
<?php
/**
 * This client-side script is to use phpredis to test the Redis server created in this repository. For details, please
 * check comments in script https://github.com/deminy/swoole-by-examples/blob/master/examples/servers/redis.php.
 *
 * You can use following command to run this script:
 *     docker exec -t  $(docker ps -qf "name=client") bash -c "./clients/redis/phpredis.php"
 */

$client = new Redis();
$client->connect("server");
echo $client->set("foo", "bar"), "\n";
echo $client->get("foo"), "\n";