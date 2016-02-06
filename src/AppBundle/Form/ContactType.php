<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujet', null, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre sujet',
                    'class' => 'input-contact form-control',
                ],
            ])
            ->add('nom', null, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'input-contact form-control',
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Votre email',
                    'class' => 'input-contact form-control',
                ],
            ])
            ->add('message', TextareaType::class, [
                'required' => false,
                'attr' => [
                    'value' => null,
                    'placeholder' => 'Votre message',
                    'class' => 'input-contact',
                    'cols' => 30,
                    'rows' => 7,
                ],
            ])
            ->add('envoyer', SubmitType::class, [
                'attr' => [
                    'class' => 'btn submit-contact',
                    'value' => '<i class="fa fa-envelope-o"></i> Envoyer',
                    'cols' => 30,
                    'rows' => 7,
                ],
            ])
        ;
    }
}