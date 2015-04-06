<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 12:29
 */

namespace Optii\LolApiBundle\Api;


class RegionalApi extends Api
{
    /**
     * @return array The array of services for the given region and endpoint
     */
    public function getService()
    {
        return $this->serviceFactory->getRegionalServices();
    }

}

