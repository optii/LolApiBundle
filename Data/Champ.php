<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 15:16
 */

namespace Opti\LolApiBundle\Data;


class Champ {

    const ALL = "all";
    const ALLY_TIPS = "allytips";
    const ALT_IMAGES = "altimages";
    const BLURB = "blurb";
    const ENEMY_TIPS = "enemytips";
    const IMAGE = "image";
    const INFO = "info";
    const LORE = "lore";
    const PAR_TYPE = "partype";
    const PASSIVE = "passive";
    const RECOMMENDED = "recommended";
    const SKINS = "skins";
    const SPELLS = "spells";
    const STATS = "stats";
    const TAGS = "tags";


    public static function getChamps(){
        return array(
            self::ALL,
            self::ALLY_TIPS,
            self::ALT_IMAGES,
            self::BLURB,
            self::ENEMY_TIPS,
            self::IMAGE,
            self::INFO,
            self::LORE,
            self::PAR_TYPE,
            self::PASSIVE,
            self::RECOMMENDED,
            self::SKINS,
            self::SPELLS,
            self::STATS,
            self::TAGS,
        );
    }

    public static function getMultipleChamps($champs = array()){
        return implode(",", $champs);
    }

    public static function getAllChamps(){
        return implode(",", self::getAllChamps());
    }
}

