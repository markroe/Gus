<?php

namespace Roelab\GusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Job
 */
class Job
{
    protected $jobcans;

    public function __construct()
    {
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
     * @var string
     */
    private $schedule;


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
     * @return Job
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
     * Set schedule
     *
     * @param string $schedule
     * @return Job
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return string 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Add jobcans
     *
     * @param \Roelab\GusBundle\Entity\Jobcan $jobcans
     * @return Job
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


    /**
     * Set name
     *
     * @param string $name
     * @return Job
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
}
