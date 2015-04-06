<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 12:34
 */

namespace Optii\LolApiBundle\Subscriber;

use GuzzleHttp\Event\SubscriberInterface;
use GuzzleHttp\Event\CompleteEvent;

class ThrottleSubscriber implements SubscriberInterface {

    private $throttle;
    private static $previousTimestamp;

    public function __construct($throttle = 1000000)
    {
        $this->throttle = (int) $throttle;
    }

    public function getEvents()
    {
        return [
            'complete' => ['onComplete']
        ];
    }

    public function onComplete(CompleteEvent $event)
    {
        $now = microtime(true);
        $wait = self::$previousTimestamp + $this->throttle - $now;
        if ($wait > 0) {
            usleep($wait);
        }
        self::$previousTimestamp = microtime(true);
    }
}

