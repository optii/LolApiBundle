<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 17:15
 */

namespace Optii\LolApiBundle\Responses;

class ResponseConverter {

    /** @var string  */
    private $response;
    /** @var  string */
    private $name;
    /** @var  string */
    private $arguments;


    public function __construct($name, $arguments, $response){
        $this->name = $name;
        $this->arguments = $arguments;
        $this->response = $response;
    }

    public function getRaw(){
        return $this->response;
    }

    public function getJson(){
        return json_encode($this->response);
    }


    public function getClass(){
        $className = self::getClassName($this->name);
        return new $className($this->response, $this->arguments);
    }

    public static function getClassName($name){
        return __NAMESPACE__.'\\'.str_replace("get", "", $name);
    }
}

