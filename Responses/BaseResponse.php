<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 17:43
 */

namespace Optii\LolApiBundle\Responses;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

abstract class BaseResponse implements ResponseClassInterface{
    protected $arguments;

    private $notPlurals = array('stats');

    public static function fromCommand(OperationCommand $command)
    {
        $response = $command->getResponse();
        $array = json_decode($response->json(), true);

        return new static($array);
    }

    public function __construct($response, $arguments = array()){
        $this->arguments = $arguments;
        foreach($response as $key => $value){
            if(gettype($value) == "array"){
                if(!in_array($key, $this->notPlurals)) {
                    $this->parse($key, $value);
                } else {
                    $className = __NAMESPACE__."\\".$key;
                    $this->{$key} = new $className($value);
                }
            } else {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * @param $name
     * @param $data
     */
    protected function parse($name, $data){
        if(substr($name, -1) === "s"){
            $className = substr($name, 0, -1);
            $className = __NAMESPACE__."\\".$className;
            foreach($data as $value){
                $this->{$name}[] = new $className($value);
            }
        }
    }
}



