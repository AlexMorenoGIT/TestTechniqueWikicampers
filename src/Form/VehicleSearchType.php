<?php

namespace App\Form;

use App\Entity\VehicleSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class VehicleSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('beginDate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de départ',
            ])
            ->add('endDate', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de retour',
            ])
            ->add('maxPricePerDay', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Prix maximum par jour'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VehicleSearch::class,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
