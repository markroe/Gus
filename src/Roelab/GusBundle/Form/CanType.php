<?php

namespace Roelab\GusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Roelab\GusBundle\Entity\Webcan;
use Roelab\GusBundle\Form\WebcanType;

class CanType extends AbstractType
{
     /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','hidden',array('data' => '1'))
            ->add('name')
			->add('url','collection',array('type'=>new WebcanType()))
			->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Roelab\GusBundle\Entity\Can'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'can';
    }
}
