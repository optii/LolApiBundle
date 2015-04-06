<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 13:03
 */

namespace Optii\LolApiBundle\Data;


class Season {
    const S3 = "SEASON3";
    const S4 = "SEASON2014";
    const S5 = "SEASON2015";

    public static function getSeasons(){
        return array(self::S3, self::S4, self::S5);
    }
}

