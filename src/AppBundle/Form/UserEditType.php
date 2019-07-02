<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Validator\Constraints\Length;
 
class UserEditType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Imię', 'attr' => ['class' => 'form-style']])
            ->add('lastname', TextType::class, ['label' => 'Nazwisko', 'attr' => ['class' => 'form-style']])
            ->add('email', EmailType::class, ['label' => 'Email', 'required' => false, 'attr' => ['class' => 'form-style']])
            ->add('pin', NumberType::class, ['label' => 'Pesel', 'attr' => ['class' => 'form-style'], 'constraints' => [new Length(['min' => 11, 'max' => 11])]])
            ->add('oldPassword', PasswordType::class, ['label' => 'Stare hasło', 'mapped' => false, 'attr' => ['class' => 'form-style']])
            ->add('password', PasswordType::class, ['label' => 'Nowe hasło', 'mapped' => false, 'attr' => ['class' => 'form-style']])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'first_options'  => ['label' => 'Nowe hasło'],
                'second_options' => ['label' => 'Powtórz hasło'],
                'invalid_message' => 'Podane hasła się różnią',
                'options' => ['attr' => ['class' => 'form-style']]])
            ->add('isActive', CheckboxType::class, ['label'    => 'Aktywny?', 'required' => false, 'attr' => ['class' => 'form-style']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'form-style']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'UserEdit';
    }
}