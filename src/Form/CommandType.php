<?php
namespace App\Form;

use App\Entity\Command;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('number')
            ->add('address')
            ->add('email')
            ->add('product', CollectionType::class, [
                'entry_type' => EntityType::class,
                'entry_options' => [
                    'class' => 'App\Entity\Product',
                    'choice_label' => 'name',
                    'multiple' => true,
                    'expanded' => true,
                ],
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'readonly' => true,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Command::class,
            'product' => [], // Define the 'product' option here
        ]);
    }
}
