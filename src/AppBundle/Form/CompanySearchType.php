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
 
class CompanySearchType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName', TextType::class, ['required' => false, 'label' => 'Nazwa firmy', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('nip', TextType::class, ['required' => false, 'label' => 'NIP', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('phoneNumber', IntegerType::class, ['required' => false, 'label' => 'Numer telefonu', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('id', IntegerType::class, ['required' => false, 'label' => 'Id firmy', 'attr' => ['class' => 'form-control form-control-sm']])
            ->add('isActive', CheckboxType::class, ['required' => false, 'label' => 'Aktywny', 'attr' => ['class' => 'checkbox-inline custom-width']])
            
            ->add('fixedAnnualIncomeFrom', IntegerType::class, ['required' => false, 'label' => 'Średni roczny przychód netto w zł.:', 'attr' => ['class' => 'form-control col-xs-2 form-control-sm','placeholder'=>'od']])
            ->add('fixedAnnualIncomeTo', IntegerType::class, ['required' => false, 'label' => 'Średni roczny przychód netto w zł.:', 'attr' => ['class' => 'form-control form-control-sm','placeholder'=>'do']])

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
        return 'CompanySearch';
    }
}