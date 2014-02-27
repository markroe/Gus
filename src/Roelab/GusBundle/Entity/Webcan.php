<?php

namespace Roelab\GusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webcan
 */
class Webcan
{
	protected $can;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Webcan
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set can
     *
     * @param \Roelab\GusBundle\Entity\Can $can
     * @return Webcan
     */
    public function setCan(\Roelab\GusBundle\Entity\Can $can = null)
    {
        $this->can = $can;

        return $this;
    }

    /**
     * Get can
     *
     * @return \Roelab\GusBundle\Entity\Can 
     */
    public function getCan()
    {
        return $this->can;
    }

    public function setCan_id($can_id)
    {
        $this->can_id = $can_id;

        return $this;
    }
}
