<?php

namespace Roelab\GusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobcan
 */
class Jobcan
{
    protected $job;
    protected $can;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $jobId;

    /**
     * @var integer
     */
    private $canId;


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
     * Set jobId
     *
     * @param integer $jobId
     * @return Jobcan
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Get jobId
     *
     * @return integer 
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set canId
     *
     * @param integer $canId
     * @return Jobcan
     */
    public function setCanId($canId)
    {
        $this->canId = $canId;

        return $this;
    }

    /**
     * Get canId
     *
     * @return integer 
     */
    public function getCanId()
    {
        return $this->canId;
    }

    /**
     * Set job
     *
     * @param \Roelab\GusBundle\Entity\Job $job
     * @return Jobcan
     */
    public function setJob(\Roelab\GusBundle\Entity\Job $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return \Roelab\GusBundle\Entity\Job 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set can
     *
     * @param \Roelab\GusBundle\Entity\Can $can
     * @return Jobcan
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
}
