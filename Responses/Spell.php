<?php
/**
 * Created by PhpStorm.
 * User: opti
 * Date: 12/03/15
 * Time: 18:11
 */

namespace Optii\LolApiBundle\Responses;


class Spell extends BaseResponse {

    protected $altimages;
    protected $cooldown;
    protected $cost;
    protected $costBurn;
    protected $costType;
    protected $description;
    protected $effect;
    protected $effectBurn;
    protected $image;
    protected $key;
    protected $leveltip;
    protected $maxrank;
    protected $range;
    protected $rangeBurn;
    protected $ressource;
    protected $sanitizedDescription;
    protected $sanitizedTooltip;
    protected $tooltip;
    protected $vars;

    public function __construct($response, $arguments = array()){
        $this->arguments = $arguments;
        foreach($response as $key => $value){
                $this->{$key} = $value;
        }
    }

    /**
     * @return mixed
     */
    public function getAltimages()
    {
        return $this->altimages;
    }

    /**
     * @return mixed
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return mixed
     */
    public function getCostBurn()
    {
        return $this->costBurn;
    }

    /**
     * @return mixed
     */
    public function getCostType()
    {
        return $this->costType;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * @return mixed
     */
    public function getEffectBurn()
    {
        return $this->effectBurn;
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
    public function getLeveltip()
    {
        return $this->leveltip;
    }

    /**
     * @return mixed
     */
    public function getMaxrank()
    {
        return $this->maxrank;
    }

    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @return mixed
     */
    public function getRangeBurn()
    {
        return $this->rangeBurn;
    }

    /**
     * @return mixed
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * @return mixed
     */
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }

    /**
     * @return mixed
     */
    public function getSanitizedTooltip()
    {
        return $this->sanitizedTooltip;
    }

    /**
     * @return mixed
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

}

