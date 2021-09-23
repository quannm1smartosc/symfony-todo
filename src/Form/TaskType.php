<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class TaskType extends AbstractType {

    public function buildForm(
        FormBuilderInterface $builder,
        array $options
    ) {
        $builder
            ->add('title', TextType::class, [
                'required' => true,
                'attr' => ['class' => 'form-control', 'maxlength' => 10]
            ])
            ->add('des', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['class' => 'form-control', 'maxlength' => 255]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Ok',
                'attr' => ['class' => 'btn btn-primary mt-3']
            ])
            ->getForm();
    }
}