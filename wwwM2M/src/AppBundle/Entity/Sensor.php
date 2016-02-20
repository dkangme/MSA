<?php

namespace AppBundle\Entity;

/**
 * Sensor
 */
class Sensor
{
    /**
     * @var float
     */
    private $humanvalue = '0';

    /**
     * @var integer
     */
    private $value = '0';

    /**
     * @var \DateTime
     */
    private $lastreport = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $idsensor;

    /**
     * @var \AppBundle\Entity\Wei
     */
    private $weiwei;

    /**
     * @var \AppBundle\Entity\Sensortype
     */
    private $sensortypesensortype;


    /**
     * Set humanvalue
     *
     * @param float $humanvalue
     *
     * @return Sensor
     */
    public function setHumanvalue($humanvalue)
    {
        $this->humanvalue = $humanvalue;

        return $this;
    }

    /**
     * Get humanvalue
     *
     * @return float
     */
    public function getHumanvalue()
    {
        return $this->humanvalue;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return Sensor
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set lastreport
     *
     * @param \DateTime $lastreport
     *
     * @return Sensor
     */
    public function setLastreport($lastreport)
    {
        $this->lastreport = $lastreport;

        return $this;
    }

    /**
     * Get lastreport
     *
     * @return \DateTime
     */
    public function getLastreport()
    {
        return $this->lastreport;
    }

    /**
     * Get idsensor
     *
     * @return integer
     */
    public function getIdsensor()
    {
        return $this->idsensor;
    }

    /**
     * Set weiwei
     *
     * @param \AppBundle\Entity\Wei $weiwei
     *
     * @return Sensor
     */
    public function setWeiwei(\AppBundle\Entity\Wei $weiwei = null)
    {
        $this->weiwei = $weiwei;

        return $this;
    }

    /**
     * Get weiwei
     *
     * @return \AppBundle\Entity\Wei
     */
    public function getWeiwei()
    {
        return $this->weiwei;
    }

    /**
     * Set sensortypesensortype
     *
     * @param \AppBundle\Entity\Sensortype $sensortypesensortype
     *
     * @return Sensor
     */
    public function setSensortypesensortype(\AppBundle\Entity\Sensortype $sensortypesensortype = null)
    {
        $this->sensortypesensortype = $sensortypesensortype;

        return $this;
    }

    /**
     * Get sensortypesensortype
     *
     * @return \AppBundle\Entity\Sensortype
     */
    public function getSensortypesensortype()
    {
        return $this->sensortypesensortype;
    }
}
