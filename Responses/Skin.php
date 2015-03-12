<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 19:09
 */

namespace Opti\LolApiBundle\Responses;


class Skin extends BaseResponse{

    /** @var  integer */
    protected $id;
    /** @var  string */
    protected $name;
    /** @var  integer */
    protected $num;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }
}

