<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 00:08
 */

namespace Opti\LolApiBundle\Api;

class StaticApi extends Api {

    public function getService()
    {
        return $this->serviceFactory->getStaticDataService();
    }
}

