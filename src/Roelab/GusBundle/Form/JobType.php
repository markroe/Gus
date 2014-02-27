<?php

namespace Roelab\GusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Roelab\GusBundle\Entity\Jobcan;
use Roelab\GusBundle\Form\JobcanType;

class JobType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('schedule','text')
            ->add('jobcans', 'entity',array(
                'class' => 'RoelabGusBundle:Can',
                'property' => 'name',
                'multiple' => 'true',
                'expanded' => true,))
            ->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Roelab\GusBundle\Entity\Job'
            //'data_class' => null,
            //'cascade_validation' => true,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'roelab_gusbundle_job';
    }
}
