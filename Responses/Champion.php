<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 17:52
 */

namespace Optii\LolApiBundle\Responses;


class Champion extends BaseResponse {

    /** @var  integer */
    protected $id;
    /** @var  boolean */
    protected $freeToPlay;
    /** @var  boolean */
    protected $active;
    /** @var  boolean */
    protected $botEnabled;
    /** @var  boolean */
    protected $botMmEnabled;
    /** @var  boolean */
    protected $rankedPlayEnabled;
    /** @var  array */
    protected $allytips;
    /** @var string  */
    protected $blurb;
    /** @var  array */
    protected $enemytips;
    /** @var   */
    protected $image;
    /** @var   */
    protected $info;
    /** @var string */
    protected $key;
    /** @var string */
    protected $lore;
    /** @var string */
    protected $name;
    /** @var string */
    protected $partype;
    /** @var   */
    protected $passive;
    /** @var array */
    protected $recommended;
    /** @var array */
    protected $skins;
    /** @var array */
    protected $spells;
    /** @var   */
    protected $stats;
    /** @var  array */
    protected $tags;
    /** @var  string */
    protected $title;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isFreeToPlay()
    {
        return $this->freeToPlay;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return boolean
     */
    public function isBotEnabled()
    {
        return $this->botEnabled;
    }

    /**
     * @return boolean
     */
    public function isBotMmEnabled()
    {
        return $this->botMmEnabled;
    }

    /**
     * @return boolean
     */
    public function isRankedPlayEnabled()
    {
        return $this->rankedPlayEnabled;
    }

    /**
     * @return array
     */
    public function getAllytips()
    {
        return $this->allytips;
    }

    /**
     * @return string
     */
    public function getBlurb()
    {
        return $this->blurb;
    }

    /**
     * @return array
     */
    public function getEnemytips()
    {
        return $this->enemytips;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getLore()
    {
        return $this->lore;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPartype()
    {
        return $this->partype;
    }

    /**
     * @return mixed
     */
    public function getPassive()
    {
        return $this->passive;
    }

    /**
     * @return array
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * @return array
     */
    public function getSkins()
    {
        return $this->skins;
    }

    /**
     * @return array
     */
    public function getSpells()
    {
        return $this->spells;
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

}

