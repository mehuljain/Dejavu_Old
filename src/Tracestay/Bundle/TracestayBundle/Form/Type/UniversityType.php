<?php
namespace Tracestay\Bundle\TracestayBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UniversityType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('tuniversityname', 'text', array('label'=>'University Name'))
                ->add('tsubdomainname', 'text', array('label'=>'Sub Domain'))
                ->add('submit', 'submit', array('label'=>'create profile'))
                ;
          
    }
    
    
    public function getName() {
        return'TracestayBundle_form_university';
    }
}