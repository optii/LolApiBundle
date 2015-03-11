<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 21:51
 */

namespace Opti\LolApiBundle\Responses;

class Champion{

    protected $active;
    protected $botEnabled;
    protected $botMmEnabled;
    protected $freeToPlay;
    protected $id;
    protected $rankedPlayEnabled;



    public function __construct($data)
    {
        $this->data = $data;
    }
}


