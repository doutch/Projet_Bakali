<?php

namespace Davyb\DashBoardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdresseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rue','hidden',array('attr' => array('data-geo' => 'route')))
            ->add('nRue','hidden',array('attr' => array('data-geo' => 'street_number')))
            ->add('ville','text',array('attr' => array('data-geo' => 'locality')))
            ->add('codePostal','text',array('attr' => array('data-geo' => 'postal_code')))
            ->add('latitude','hidden',array('attr' => array('data-geo' => 'lat')))
            ->add('longitude','hidden',array('attr' => array('data-geo' => 'lng')))
            ->add('region','hidden',array('attr' => array('data-geo' => 'administrative_area_level_1')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Davyb\DashBoardBundle\Entity\Adresse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'davyb_dashboardbundle_adresse';
    }
}
