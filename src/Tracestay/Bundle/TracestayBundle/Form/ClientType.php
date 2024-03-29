<?php

namespace Tracestay\Bundle\TracestayBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;

class ClientType extends AbstractType
{
    
    /**
     * set form fields
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('university', new UniversityType(), ['label'=>' '])
                ->add('firstName')
                ->add('lastName')
                ->add('username', 'text', ['attr'=>['maxlength'=>15]])
                ->add('plainPassword', 'password', ['label'=>'Password'])
                ->add('email')
//                ->add('phone', 'integer', ['attr'=>['maxlength'=>15]])
//                ->add('altPhone', 'integer', ['attr'=>['maxlength'=>15]])
//                ->add('address', 'textarea')
                ->add('termsConditions', 'checkbox', ['label'=>'Terms & Conditions' ,'mapped'=>false])
                ->add('country', 'choice', ['choices'=>[1=>'India', 2=>'France']])
                ->add('submit', 'submit');
            ;
    }
    
    /**
     * set form defaults
     * @param \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(['data_class'=>'Tracestay\Bundle\TracestayBundle\Entity\Client']);
    }

    /*
     * return Class name
     */
    public function getName() {
        return 'app_TraceBundle_Client';
    }
}
