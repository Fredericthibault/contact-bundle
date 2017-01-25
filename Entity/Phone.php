<?php

namespace Viweb\ContactBundle\Entity;

/**
 * Phone
 */
class Phone
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
    private $num;

    /**
     * @var string
     */
    private $ext;


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
     * @return Phone
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
     * Set num
     *
     * @param string $num
     *
     * @return Phone
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set ext
     *
     * @param string $ext
     *
     * @return Phone
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
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
     * @return Phone
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
