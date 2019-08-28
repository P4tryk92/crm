<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;
 
class UserNewType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Imię', 'attr' => ['class' => 'form-control']])
            ->add('lastname', TextType::class, ['label' => 'Nazwisko', 'attr' => ['class' => 'form-control']])
            ->add('pin', NumberType::class, ['label' => 'Pesel', 'attr' => ['class' => 'form-control'], 'constraints' => [new Length(['min' => 11, 'max' => 11])]])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'btn btn-danger btn-sm mt-3']])
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
        return 'UserNew';
    }
}