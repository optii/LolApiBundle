<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 00:16
 */

namespace Opti\LolApiBundle\Api;

use GuzzleHttp\Client;
use Opti\LolApiBundle\Subscriber\CacheSubscriber;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use Opti\LolApiBundle\Subscriber\ThrottleSubscriber;
use Opti\LolApiBundle\Responses\ResponseConverter;

abstract class Api {

    /** @var  array */
    protected $endpoints;
    /** @var  string */
    protected $region;
    /** @var  boolean */
    protected $caching;
    /** @var  string */
    protected $key;
    /** @var  string */
    protected $cacheDir;
    /** @var  ServiceFactory */
    protected $serviceFactory;
    /** @var  Client */
    protected $client;
    /** @var  boolean */
    protected $throttle;

    public function __construct($key, $endpoints, $region, $cache,  $cacheDir, $throttle){
        $this->endpoints = $endpoints;
        $this->region = $region;
        $this->caching = $cache;
        $this->cacheDir = $cacheDir;
        $this->key = $key;
        $this->throttle = $throttle;
        $this->serviceFactory = new ServiceFactory($this->endpoints, $this->region);
        $this->buildClientFactory();
    }


    public function __call($name, $arguments){
        $response = $this->client->{$name}((array_key_exists(0,$arguments)) ? $arguments[0] : null);
        return $response;
    }


    /**
     * @return array The array of services for the given region and endpoint
     */
    public abstract function getService();

    /**
     * @return Client The guzzle client
     */
    public function buildClientFactory(){
        $defaultConfig = [
            'defaults' => [
                'query' => ['api_key' => $this->key],
            ],
        ];

        $client = new Client($defaultConfig);
        $description = new Description($this->getService());
        $this->client = new GuzzleClient($client, $description);

        // Attach the throttle subscriber
        if($this->throttle){
            $this->client->getHttpClient()->getEmitter()->attach(new ThrottleSubscriber());
        }

        // Attach the cache subscriber
        if($this->caching){
            $this->client->getHttpClient()->getEmitter()->attach(new CacheSubscriber($this->cacheDir));
        }
    }
}

