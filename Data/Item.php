<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 15:27
 */

namespace Opti\LolApiBundle\Data;


class Item {
    const ALL = "all";
    const COLLOQ = "colloq";
    const CONSUME_ON_FULL = "consumeOnFull";
    const CONSUMED = "consumed";
    const DEPTH = "depth";
    const FROM = "from";
    const GOLD = "gold";
    const GROUPS = "groups";
    const HIDE_FROM_ALL = "hideFromAll";
    const IMAGE = "image";
    const IN_STORE = "inStore";
    const INTO = "into";
    const MAPS = "maps";
    const REQUIRED_CHAMPION = "requiredChampion";
    const SANITIZED_DESCRIPTION = "sanitizedDescription";
    const SPECIAL_RECIPE = "specialRecipe";
    const STACKS = "stacks";
    const STATS = "stats";
    const TAGS = "tags";
    const TREE = "tree";

    public static function getItems(){
        return array(
            self::ALL,
            self::COLLOQ,
            self::CONSUME_ON_FULL,
            self::CONSUMED,
            self::DEPTH,
            self::FROM,
            self::GOLD,
            self::GROUPS,
            self::HIDE_FROM_ALL,
            self::IMAGE,
            self::IN_STORE,
            self::INTO,
            self::MAPS,
            self::REQUIRED_CHAMPION,
            self::SANITIZED_DESCRIPTION,
            self::SPECIAL_RECIPE,
            self::IN_STORE,
            self::STATS,
            self::TAGS,
            self::TREE
        );
    }

    public static function getMultipleItems($items = array()){
        return implode(',', $items);
    }
}

