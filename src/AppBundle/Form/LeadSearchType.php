<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
 
class LeadSearchType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, ['required' => false, 'label' => 'Imię', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('lastName', TextType::class, ['required' => false, 'label' => 'Nazwisko', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('pin', TextType::class, ['required' => false, 'label' => 'Pesel', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('phoneNumber', IntegerType::class, ['required' => false, 'label' => 'Numer telefonu', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('id', IntegerType::class, ['required' => false, 'label' => 'Id klienta', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('isActive', CheckboxType::class, ['required' => false, 'label' => 'Aktywny?', 'attr' => ['class' => 'checkbox-inline custom-width']])
            
            ->add('fixedSalaryNetFrom', IntegerType::class, ['required' => false, 'label' => 'Wysokość wynagrodzeń stałych netto w zł. od:', 'attr' => ['class' => 'form-control form-control-sm','placeholder'=>'od']])
            ->add('fixedSalaryNetTo', IntegerType::class, ['required' => false, 'label' => 'Wysokość wynagrodzeń stałych netto w zł. do:', 'attr' => ['class' => 'form-control form-control-sm','placeholder'=>'do']])

            ->add('search', SubmitType::class, ['label' => 'Szukaj','attr' => ['class' => 'btn btn-danger btn-sm']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SearchLeadCompany',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'LeadSearch';
    }
}