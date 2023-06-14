<?php

namespace App\Form;

use App\Entity\Cats;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CatsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('FechaNacimiento')
            ->add('Sexo')
            ->add('Salud')
            ->add('Esterilizado')
            ->add('Imagen')
            ->add('Descripcion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cats::class,
        ]);
    }
}
