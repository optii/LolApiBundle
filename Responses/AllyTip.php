<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 19:32
 */

namespace Optii\LolApiBundle\Responses;


class AllyTip extends BaseResponse{

    /** @var  string */
    protected $tip;

    public function __construct($response, $arguments = array())
    {
        $this->tip = $response;
    }

    /**
     * @return string
     */
    public function getTip()
    {
        return $this->tip;
    }
}

