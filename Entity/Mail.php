<?php

namespace Viweb\ContactBundle\Entity;

/**
 * Mail
 */
class Mail
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $mail;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Mail
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * @var \Viweb\ContactBundle\Entity\ContactContainerTranslation
     */
    private $container;


    /**
     * Set container
     *
     * @param \Viweb\ContactBundle\Entity\ContactContainerTranslation $container
     *
     * @return Mail
     */
    public function setContainer(\Viweb\ContactBundle\Entity\ContactContainerTranslation $container = null)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * Get container
     *
     * @return \Viweb\ContactBundle\Entity\ContactContainerTranslation
     */
    public function getContainer()
    {
        return $this->container;
    }
}
