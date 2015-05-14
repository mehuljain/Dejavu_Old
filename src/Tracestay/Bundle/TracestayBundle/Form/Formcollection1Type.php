<?php

namespace Tracestay\Bundle\TracestayBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Formcollection1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('age')
            ->add('dob')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tracestay\Bundle\TracestayBundle\Entity\Formcollection1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tracestay_bundle_tracestaybundle_formcollection1';
    }
}
