<?php

namespace Defacto\LicenseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('computer')
        ;
    }

    public function getName()
    {
        return 'defacto_licensebundle_usertype';
    }
}
