<?php

namespace App\Form;

use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', ChoiceType::class, [
                'label' => 'Marque*',
                'choices' => [
                    'Citroen' => 'Citroen',
                    'Dacia' => 'Dacia',
                    'Fiat' => 'Fiat',
                    'Ford' => 'Ford',
                    'Hyundai' => 'Hyundai',
                    'Iveco' => 'Iveco',
                    'Izuzu' => 'Izuzu',
                    'Jeep' => 'Jeep',
                    'Man' => 'Man',
                    'Mazda' => 'Mazda',
                    'Mercedes' => 'Mercedes',
                    'Nissan' => 'Nissan',
                    'Mitsubishi' => 'Mitsubishi',
                    'Opel' => 'Opel',
                    'Peugeot' => 'Peugeot',
                    'Porsche' => 'Porsche',
                    'Renault' => 'Renault',
                    'Seat' => 'Seat',
                    'Toyota' => 'Toyota',
                    'Volkswagen' => 'Volkswagen',
                    'Volvo' => 'Volvo'
                ],
            ])
            ->add('model', TextType::class, [
                'label' => 'Modèle*',
            ])
            ->add('imageURL', TextType::class, [
                'label' => 'URL de l\'image*',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Continuer',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}