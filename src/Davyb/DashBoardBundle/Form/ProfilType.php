<?php

namespace Davyb\DashBoardBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Davyb\DashBoardBundle\Entity\Sexe;
use Davyb\DashBoardBundle\Form\TelephoneType;

class ProfilType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('pseudo', 'text')
            ->add('dateNaissance', 'date',array('label'=>'date de naissance * :',
        										'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'input_date')))
            ->add('adresse',  new AdresseType())
            ->add('telephone', 'collection', array(
        											'type'         => new TelephoneType(),
       												 'allow_add'    => true,
        											 'allow_delete' => true))
            ->add('fichierImage', 'file')
            ->add('idSexe','entity',array('class' => 'Davyb\DashBoardBundle\Entity\Sexe',
											'property' => 'type'))
			->add('description', 'textarea')
			->add('Enregistrer','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Davyb\DashBoardBundle\Entity\Profil'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tableau_bord_profil';
    }
}
