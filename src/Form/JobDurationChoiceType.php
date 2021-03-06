<?php

namespace AppBundle\Form;

use AppBundle\Summary\JobDuration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobDurationChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults([
                'choices' => JobDuration::CHOICES,
                'expanded' => true,
                'cast_null_to_string' => true,
            ])
        ;
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
