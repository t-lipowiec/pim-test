<?php

    namespace App\Form;


    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\FileType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\RangeType;

    class ScentForm extends AbstactType{

      public function buildForm(FormBuilderInterface $builder,array $options):void{

        $builder
          ->add('Image', FileType::class)
          ->add('localizedfields', CollectionType::class, [
            'name', TextType::class,
            'description', TextareaType::class
          ])
          ->add('series', TextType::class)
          ->add('manufacturer', ChoiceType::class, [
            'choices' => [
              'Versace' => 'versace',
              'Hugo Boss' => 'hugo_boss',
            ]
          ])
          ->add('productionYear', RangeType::class, [
            'attr' => [
              'min' => 1990,
              'max' => 2023
            ]
          ])
          ->add('categories', ChoiceType::class, [
            'Eau da Parfum' => 'parfum',
            'Eau da Toilette' => 'toilette',
            'Eau da Cologne' => 'cologne'
          ])
          ->add('gender', ChoiceType::class, [
            'male' => 'male',
            'female' => 'female',
            'unisex' => 'unisex'
          ])
          ->add('capacity', ChoiceType::class, [
            '30' => '30',
            '50' => '50',
            '100' => '100',
            '200' => '200'
          ])
          ->add('save', SubmitType::class)
      

    }
