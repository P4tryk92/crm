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
 
class CompanyType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName', TextType::class, ['label' => 'Nazwa firmy', 'attr' => ['class' => 'form-control']])
            ->add('type', TextType::class, ['label' => 'Typ', 'attr' => ['class' => 'form-control']])
            ->add('industry', TextType::class, ['label' => 'Branża', 'attr' => ['class' => 'form-control']])
            ->add('nip', TextType::class, ['label' => 'NIP', 'attr' => ['class' => 'form-control']])
            ->add('regon', TextType::class, ['label' => 'Regon', 'attr' => ['class' => 'form-control']])
            ->add('phoneNumber', IntegerType::class, ['label' => 'Numer telefonu', 'attr' => ['class' => 'form-control']])
            ->add('email', TextType::class, ['label' => 'Adres mailowy', 'attr' => ['class' => 'form-control']])
            ->add('fax', TextType::class, ['label' => 'Fax', 'attr' => ['class' => 'form-control']])
            ->add('isActive', CheckboxType::class, ['required' => false, 'label' => 'Aktywny?', 'attr' => ['class' => 'checkbox-inline custom-width']])
            ->add('note', TextareaType::class, ['required' => false, 'label' => 'Notatka', 'attr' => ['class' => 'form-control']])
            ->add('companyStartDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data założenia firmy', 'attr' => ['class' => 'form-control']])
            ->add('site', TextType::class, ['label' => 'Witryna internetowa', 'attr' => ['class' => 'form-control']])
            ->add('addressStreetAndNumber', TextType::class, ['label' => 'Adres zamieszkania (ulica i numer budynku)', 'attr' => ['class' => 'form-control']])
            ->add('addressPostCode', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['class' => 'form-control']])
            ->add('addressCity', TextType::class, ['label' => 'Miejscowość', 'attr' => ['class' => 'form-control']])
            ->add('voivodeship', TextType::class, ['label' => 'Województwo', 'attr' => ['class' => 'form-control']])
            ->add('nationality', TextType::class, ['label' => 'Obywatelstwo', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceAddressStreetAndNumber', TextType::class, ['required' => false,'label' => 'Adres korespondencyjny (ulica i numer budynku)', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceAddressPostCode', TextType::class, ['required' => false,'label' => 'Kod pocztowy do Korespondencji', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceAddressCity', TextType::class, ['required' => false,'label' => 'Miejscowość do Korespondencji', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceVoivodeship', TextType::class, ['required' => false,'label' => 'Województwo do Korespondencji', 'attr' => ['class' => 'form-control']])
            ->add('numberOfEmployees', IntegerType::class, ['label' => 'Liczba zatrudnianych pracowników', 'attr' => ['class' => 'form-control']])
            ->add('monthlyCosts', IntegerType::class, ['label' => 'Miesięczne koszta stałe netto w zł', 'attr' => ['class' => 'form-control']])
            ->add('estimatedMonthlyCosts', IntegerType::class, ['label' => 'Szacowane miesięczne koszta dodatkowe netto w zł', 'attr' => ['class' => 'form-control']])
            ->add('fixedAnnualIncome', IntegerType::class, ['label' => 'Średni roczny przychód firmy netto w zł', 'attr' => ['class' => 'form-control']])
            ->add('stockQuotes', IntegerType::class, ['required' => false,'label' => 'Notowania przez ostatnie 3 miesiące dodatnie/ujemne', 'attr' => ['class' => 'form-control']])
            ->add('planingInvestments', TextType::class, ['required' => false,'label' => 'Planowane inwestycje', 'attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz','attr' => ['class' => 'btn btn-primary']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Company';
    }
}