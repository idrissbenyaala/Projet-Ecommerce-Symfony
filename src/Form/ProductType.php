<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('shortDescription')
            ->add('longDescription', TextareaType::class, [
                'label' => 'Long Description',
                'required' => false, // Adjust as needed
                'attr' => [
                    'rows' => 4, // Adjust the number of rows as needed
                    'placeholder' => 'Enter a short description...',
                ],
            ])        
            ->add('image', FileType::class, [
                'label' => 'Product image (choose file)',

                'mapped' => false ,
                'required' => false,
                'data_class' => null,

                // unmapped fields can't define their validation using attributes
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpg',
                            'image/jpg',
                            'image/jpeg',
                            'image/webp',

                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('multiplesImage', FileType::class, [
                'label' => 'Multiple Images (choose files)',
                'mapped' => false,
                'required' => false,
                'multiple' => true,  // Allow multiple files
                'constraints' => [
                    new All([
                        'constraints'=>[
                            new File([
                                'maxSize' => '1024k',
                                'mimeTypes' => [
                                    'image/jpeg',
                                    'image/png',
                                    // Add more mime types as needed
                                ],
                                'mimeTypesMessage' => 'Please upload valid image files',
                            ]),
                        ]
                        
                    ]),
                ],
            ])
            ->add('price')
            ->add('Category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name', // Assuming 'name' is a property in your Category entity
            ]) ;
        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
