<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 21:51
 */

namespace Opti\LolApiBundle\Responses;

use

class Champion implements ResponseInterface{

    protected $active;
    protected $botEnabled;
    protected $botMmEnabled;
    protected $freeToPlay;
    protected $id;
    protected $rankedPlayEnabled;

    public static function fromCommand(OperationCommand $command)
    {
        $response = $command->getResponse();
        $xml = $response->xml();

        return new self((string) $xml);
    }

    public function __construct($data)
    {
        $this->
    }
}


