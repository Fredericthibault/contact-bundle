<?php
/**
 * Created by PhpStorm.
 * User: pmdc
 * Date: 23/01/17
 * Time: 11:26 AM
 */

namespace Viweb\ContactBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Viweb\ContactBundle\Entity\Address;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('civic', TextType::class)
            ->add('street', TextType::class)
            ->add('city', TextType::class)
            ->add('province', TextType::class)
            ->add('country', TextType::class)
            ->add('lat', TextType::class)
            ->add('lng', TextType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Address::class);
    }

}