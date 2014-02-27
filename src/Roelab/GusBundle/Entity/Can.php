<?php

namespace Roelab\GusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Can
 */
class Can
{
	protected $webcans;
	protected $emailcans;
	protected $dlpcans;
    protected $jobcans;

	public function __construct() {
		$this->webcans = new ArrayCollection();
		$this->emailcans = new ArrayCollection();
		$this->dlpcans = new ArrayCollection();
		$this->jobcans = new ArrayCollection();
	}

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $name;


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
     * Set type
     *
     * @param integer $type
     * @return Can
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Can
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
     * Add dlpcans
     *
     * @param \Roelab\GusBundle\Entity\Dlpcan $dlpcans
     * @return Can
     */
    public function addDlpcan(\Roelab\GusBundle\Entity\Dlpcan $dlpcans)
    {
        $this->dlpcans[] = $dlpcans;

        return $this;
    }

    /**
     * Remove dlpcans
     *
     * @param \Roelab\GusBundle\Entity\Dlpcan $dlpcans
     */
    public function removeDlpcan(\Roelab\GusBundle\Entity\Dlpcan $dlpcans)
    {
        $this->dlpcans->removeElement($dlpcans);
    }

    /**
     * Get dlpcans
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDlpcans()
    {
        return $this->dlpcans;
    }

    /**
     * Add webcans
     *
     * @param \Roelab\GusBundle\Entity\Webcan $webcans
     * @return Can
     */
    public function addWebcan(\Roelab\GusBundle\Entity\Webcan $webcans)
    {
        $this->webcans[] = $webcans;

        return $this;
    }

    /**
     * Remove webcans
     *
     * @param \Roelab\GusBundle\Entity\Webcan $webcans
     */
    public function removeWebcan(\Roelab\GusBundle\Entity\Webcan $webcans)
    {
        $this->webcans->removeElement($webcans);
    }

    /**
     * Get webcans
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWebcans()
    {
        return $this->webcans;
    }

    /**
     * Add jobcans
     *
     * @param \Roelab\GusBundle\Entity\Jobcan $jobcans
     * @return Can
     */
    public function addJobcan(\Roelab\GusBundle\Entity\Jobcan $jobcans)
    {
        $this->jobcans[] = $jobcans;

        return $this;
    }

    /**
     * Remove jobcans
     *
     * @param \Roelab\GusBundle\Entity\Jobcan $jobcans
     */
    public function removeJobcan(\Roelab\GusBundle\Entity\Jobcan $jobcans)
    {
        $this->jobcans->removeElement($jobcans);
    }

    /**
     * Get jobcans
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobcans()
    {
        return $this->jobcans;
    }
}
