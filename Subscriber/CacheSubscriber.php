<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 00:25
 */

namespace Opti\LolApiBundle\Subscriber;


use Doctrine\Common\Cache\FilesystemCache;
use GuzzleHttp\Event\BeforeEvent;
use GuzzleHttp\Event\CompleteEvent;
use GuzzleHttp\Event\ErrorEvent;
use GuzzleHttp\Event\SubscriberInterface;
use GuzzleHttp\Event\RequestEvents;

class CacheSubscriber implements SubscriberInterface{

    /** @var FilesystemCache  */
    private $cache;
    const CHACHE_SUB_DIR = "/lolapi";

    public function __construct($rootDir){
        $this->cache = new FilesystemCache($rootDir.self::CHACHE_SUB_DIR);
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return [
            'before'   => ['onBefore', RequestEvents::LATE],
            'complete' => ['onComplete', RequestEvents::EARLY],
            'error'    => ['onError', RequestEvents::EARLY]
        ];
    }


    public function onBefore(BeforeEvent $event){

        $request = $event->getRequest();

        if(!($response = $this->cache->fetch($request->__toString()))){
            return;
        }

        $event->intercept($response);
    }

    public function onComplete(CompleteEvent $event){
        $request = $event->getRequest();
        $response = $event->getResponse();

        if(!$this->cache->contains($request->__toString())){
            $this->cache->save($request->__toString(), $response, 1000);
        }
    }

    public function onError(ErrorEvent $event){
            //If an error occurs see if data can be served from cache
            $request = $event->getRequest();

            if($response = $this->cache->fetch($request->__toString())){
                $event->intercept($response);
            }
    }

}

