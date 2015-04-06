<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 11/03/15
 * Time: 13:02
 */

namespace Optii\LolApiBundle\Data;


class Queue {
    const RANKED_SOLO_5X5 = "RANKED_SOLO_5X5";
    const RANKED_TEAM_5X5 = "RANKED_TEAM_5X5";
    const RANKED_TEAM_3X3 = "RANKED_TEAM_3X3";

    public static function getQueues(){
        return array(self::RANKED_SOLO_5X5, self::RANKED_TEAM_3X3, self::RANKED_TEAM_5X5);
    }
}

