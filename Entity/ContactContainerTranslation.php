<?php

namespace Viweb\ContactBundle\Entity;
use Sylius\Component\Resource\Model\AbstractTranslation;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * ContactContainerTranslation
 */
class ContactContainerTranslation extends AbstractTranslation implements ResourceInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $mainText;


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
     * Set mainText
     *
     * @param string $mainText
     *
     * @return ContactContainerTranslation
     */
    public function setMainText($mainText)
    {
        $this->mainText = $mainText;

        return $this;
    }

    /**
     * Get mainText
     *
     * @return string
     */
    public function getMainText()
    {
        return $this->mainText;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $addresses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $phones;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->phones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mails = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add address
     *
     * @param \Viweb\ContactBundle\Entity\Address $address
     *
     * @return ContactContainerTranslation
     */
    public function addAddress(\Viweb\ContactBundle\Entity\Address $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \Viweb\ContactBundle\Entity\Address $address
     */
    public function removeAddress(\Viweb\ContactBundle\Entity\Address $address)
    {
        $this->addresses->removeElement($address);
    }

    /**
     * Get addresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Add phone
     *
     * @param \Viweb\ContactBundle\Entity\Phone $phone
     *
     * @return ContactContainerTranslation
     */
    public function addPhone(\Viweb\ContactBundle\Entity\Phone $phone)
    {
        $this->phones[] = $phone;

        return $this;
    }

    /**
     * Remove phone
     *
     * @param \Viweb\ContactBundle\Entity\Phone $phone
     */
    public function removePhone(\Viweb\ContactBundle\Entity\Phone $phone)
    {
        $this->phones->removeElement($phone);
    }

    /**
     * Get phones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Add mail
     *
     * @param \Viweb\ContactBundle\Entity\Mail $mail
     *
     * @return ContactContainerTranslation
     */
    public function addMail(\Viweb\ContactBundle\Entity\Mail $mail)
    {
        $this->mails[] = $mail;

        return $this;
    }

    /**
     * Remove mail
     *
     * @param \Viweb\ContactBundle\Entity\Mail $mail
     */
    public function removeMail(\Viweb\ContactBundle\Entity\Mail $mail)
    {
        $this->mails->removeElement($mail);
    }

    /**
     * Get mails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMails()
    {
        return $this->mails;
    }
}
