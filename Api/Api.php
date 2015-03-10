<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 00:16
 */

namespace Opti\LolApiBundle\Api;


class Api {
    private $endpoints;

    public function __construct($endpoints, $region, $caching){
        $this->endpoints = $endpoints;
        $this->region = $region;
        $this->caching = $caching;
    }


    public function __call($name, $arguments){
        $serviceFactory = new ServiceFactory($this->endpoints, $this->region);
        $client = ClientFactory::factory($serviceFactory->getRegionalServices());
        //TODO: Implement caching here ??
        return $client->{$name}($arguments);
    }
}