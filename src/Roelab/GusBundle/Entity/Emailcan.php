<?php

namespace Roelab\GusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emailcan
 */
class Emailcan
{
	protected $can;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $attachment;


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
     * Set subject
     *
     * @param string $subject
     * @return Emailcan
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Emailcan
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return Emailcan
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set can
     *
     * @param \Roelab\GusBundle\Entity\Can $can
     * @return Emailcan
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
