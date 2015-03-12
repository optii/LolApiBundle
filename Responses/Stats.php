<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 18:14
 */

namespace Opti\LolApiBundle\Responses;


class Stats extends BaseResponse {
    protected $armor;
    protected $armorperlevel;
    protected $attackdamage;
    protected $attackdamageperlevel;
    protected $attackrange;
    protected $attackspeedoffset;
    protected $attackspeedperlevel;
    protected $crit;
    protected $critperlevel;
    protected $hp;
    protected $hpregen;
    protected $hpregenperlevel;
    protected $movespeed;
    protected $mp;
    protected $mpperlevel;
    protected $mpregen;
    protected $mpregenperlevel;
    protected $spellblock;
    protected $spellblockperlevel;

    /**
     * @return mixed
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @return mixed
     */
    public function getArmorperlevel()
    {
        return $this->armorperlevel;
    }

    /**
     * @return mixed
     */
    public function getAttackdamage()
    {
        return $this->attackdamage;
    }

    /**
     * @return mixed
     */
    public function getAttackdamageperlevel()
    {
        return $this->attackdamageperlevel;
    }

    /**
     * @return mixed
     */
    public function getAttackrange()
    {
        return $this->attackrange;
    }

    /**
     * @return mixed
     */
    public function getAttackspeedoffset()
    {
        return $this->attackspeedoffset;
    }

    /**
     * @return mixed
     */
    public function getAttackspeedperlevel()
    {
        return $this->attackspeedperlevel;
    }

    /**
     * @return mixed
     */
    public function getCrit()
    {
        return $this->crit;
    }

    /**
     * @return mixed
     */
    public function getCritperlevel()
    {
        return $this->critperlevel;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @return mixed
     */
    public function getHpregen()
    {
        return $this->hpregen;
    }

    /**
     * @return mixed
     */
    public function getHpregenperlevel()
    {
        return $this->hpregenperlevel;
    }

    /**
     * @return mixed
     */
    public function getMovespeed()
    {
        return $this->movespeed;
    }

    /**
     * @return mixed
     */
    public function getMp()
    {
        return $this->mp;
    }

    /**
     * @return mixed
     */
    public function getMpperlevel()
    {
        return $this->mpperlevel;
    }

    /**
     * @return mixed
     */
    public function getMpregen()
    {
        return $this->mpregen;
    }

    /**
     * @return mixed
     */
    public function getMpregenperlevel()
    {
        return $this->mpregenperlevel;
    }

    /**
     * @return mixed
     */
    public function getSpellblock()
    {
        return $this->spellblock;
    }

    /**
     * @return mixed
     */
    public function getSpellblockperlevel()
    {
        return $this->spellblockperlevel;
    }

}



