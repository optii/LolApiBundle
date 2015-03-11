<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 13:06
 */

namespace Opti\LolApiBundle\Data;


class Platform {
    const BR = "BR1";
    const EUNE = "EUN1";
    const EUW = "EUW1";
    const KR = "KR";
    const LAS = "LA2";
    const LAN = "LA1";
    const NA = "NA1";
    const OCE = "OC1";
    const TR = "TR1";
    const RU = "RU";
    const PBE = "PBE1";


    /**
     * List of all regions
     * @return array
     */
    public static function getRegions(){
        return array(
            self::BR,
            self::EUNE,
            self::EUW,
            self::KR,
            self::LAN,
            self::LAS,
            self::NA,
            self::OCE,
            self::TR,
            self::RU,
            self::PBE
        );
    }
}