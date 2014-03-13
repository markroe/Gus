<?php

namespace Roelab\GusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dlpcan
 */
class Dlpcan
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
     * @var string
     */
    private $content;


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
     * @return Dlpcan
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
     * Set content
     *
     * @param string $content
     * @return Dlpcan
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set can
     *
     * @param \Roelab\GusBundle\Entity\Can $can
     * @return Dlpcan
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
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $data;


    /**
     * Set name
     *
     * @param string $name
     * @return Dlpcan
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Dlpcan
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }
}
