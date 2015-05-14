<?php

namespace Tracestay\Bundle\TracestayBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;


class WebsitesettingType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('universityId')
                ->add('tWebsiteName')
                ->add('tTagLine')
                ->add('tInstitutionName')
                ->add('tEmailTrackingAddress')
                ->add('tEmail_replyto')
                ->add('nCountry')
                ->add('bHTTPS')
                ->add('bGoogleAnalytics')
                ->add('bWebmasterTools')
                ->add('nWebsitelaguage')
                ->add('bMailchimp')
                ->add('tMailchimpAPIkey')
                ->add('dUpdatedAt')      
                ->add('dCreatedAt')      
                ->add('timeZoneId')     
                ->add('hexValueId');   
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'Tracestay\Bundle\TracestayBundle\Entity\Websitesetting'));
    }
    
    public function getName() {
        return 'Tracestay_Bundle_TracestayBundle_SubdomainType';
    }
}