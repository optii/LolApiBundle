<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 19:38
 */

namespace Optii\LolApiBundle\Responses;


class Tag extends BaseResponse{

    protected $name;

    public function __construct($response, $arguments = array())
    {
       $this->name = $response;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}

