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
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use Opti\LolApiBundle\Subscriber\ThrottleSubscriber;

abstract class Api {

    /** @var  array */
    protected $endpoints;
    /** @var  string */
    protected $region;
    /** @var  boolean */
    protected $caching;
    /** @var  ContainerInterface */
    protected $container;
    /** @var  ServiceFactory */
    protected $serviceFactory;
    /** @var  Client */
    protected $client;

    public function __construct(ContainerInterface $container){
        $this->container = $container;
        $this->endpoints = $container->getParameter('opti_lol_api.endpoints');
        $this->region = $container->getParameter('opti_lol_api.region');
        $this->caching = $container->getParameter('opti_lol_api.cache');
        $this->serviceFactory = new ServiceFactory($this->endpoints, $this->region);
        $this->buildClientFactory();
    }


    public function __call($name, $arguments){
        return $this->client->{$name}((array_key_exists(0,$arguments)) ? $arguments[0] : null);
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
                'query' => ['api_key' => $this->container->getParameter('opti_lol_api.key')],
            ],
        ];

        $client = new Client($defaultConfig);
        $description = new Description($this->getService());
        $this->client = new GuzzleClient($client, $description);

        // Attach the throttle subscriber
        if($this->container->getParameter('opti_lol_api.throttle')){
            $this->client->getHttpClient()->getEmitter()->attach(new ThrottleSubscriber());
        }

        // Attach the cache subscriber
        if($this->caching){
            $this->client->getHttpClient()->getEmitter()->attach(new CacheSubscriber());
        }
    }
}