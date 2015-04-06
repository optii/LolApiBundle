<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 11:59
 */

namespace Optii\LolApiBundle\Data;

class Region {
    const BR = "br";
    const EUNE = "eune";
    const EUW = "euw";
    const KR = "kr";
    const LAN = "lan";
    const LAS = "las";
    const NA = "na";
    const OCE = "oce";
    const TR = "tr";
    const RU = "ru";
    const PBE = "pbe";


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

