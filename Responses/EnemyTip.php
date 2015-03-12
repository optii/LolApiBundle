<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 19:37
 */

namespace Opti\LolApiBundle\Responses;


class EnemyTip extends BaseResponse{

    protected $tip;

    public function __construct($response, $arguments = array())
    {
        $this->tip = $response;
    }

    /**
     * @return mixed
     */
    public function getTip()
    {
        return $this->tip;
    }
}

