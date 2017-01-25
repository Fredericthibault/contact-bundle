<?php

namespace Viweb\ContactBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * ContactContainer
 */
class ContactContainer implements ResourceInterface, TranslatableInterface
{
    use TranslatableTrait {
        __construct as intializeTranslationCollection;
    }

    public function __construct()
    {
        $this->currentLocale = $this->fallbackLocale = 'en';
        $this->intializeTranslationCollection();
    }


    /**
     * @var int
     */
    private $id;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    // Translation Business
    protected function createTranslation()
    {
        return new ContactContainerTranslation();
    }

    // Translation Passthrough
    public function getMainText()
    {
        return $this->getTranslation()->getMainText();
    }

    public function getAddresses()
    {
        return $this->getTranslation()->getAddresses();
    }

    public function getPhones()
    {
        return $this->getTranslation()->getPhones();
    }

    public function getMails()
    {
        return $this->getTranslation()->getMails();
    }
}
