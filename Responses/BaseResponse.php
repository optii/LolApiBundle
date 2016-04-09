<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 17:43
 */

namespace Optii\LolApiBundle\Responses;

abstract class BaseResponse{
    protected $arguments;

    private $notPlurals = array('stats');


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



