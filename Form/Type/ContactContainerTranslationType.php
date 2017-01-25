<?php
/**
 * Created by PhpStorm.
 * User: pmdc
 * Date: 23/01/17
 * Time: 11:24 AM
 */

namespace Viweb\ContactBundle\Form\Type;


use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Viweb\ContactBundle\Entity\ContactContainerTranslation;

class ContactContainerTranslationType extends AbstractResourceType
{
    public function __construct($dataClass = null, $validationGroups = [])
    {
        if(!$dataClass){
            $dataClass = ContactContainerTranslation::class;
        }
        parent::__construct($dataClass, $validationGroups);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('main_text', TextareaType::class)
            ->add('addresses', CollectionType::class, [
                'entry_type' => AddressType::class,
                'allow_add' => true
            ])
            ->add('mails', CollectionType::class, [
                'entry_type' => MailType::class
            ])
            ->add('phones', CollectionType::class, [
                'entry_type' => PhoneType::class
            ]);

    }

}