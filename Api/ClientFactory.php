<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 10/03/15
 * Time: 23:30
 */

namespace Optii\LolApiBundle\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

class ClientFactory {

    public static function factory($service, array $config = [])
    {
        $client = new Client($config);
        $description = new Description($service);
        return new GuzzleClient($client, $description);
    }
}

