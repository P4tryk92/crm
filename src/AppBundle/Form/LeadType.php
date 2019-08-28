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
 
class LeadType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, ['label' => 'Imię', 'attr' => ['class' => 'form-control']])
            ->add('lastName', TextType::class, ['label' => 'Nazwisko', 'attr' => ['class' => 'form-control']])
            ->add('pin', TextType::class, ['label' => 'Pesel', 'attr' => ['class' => 'form-control']])
            ->add('phoneNumber', IntegerType::class, ['label' => 'Numer telefonu', 'attr' => ['class' => 'form-control']])
            ->add('email', TextType::class, ['label' => 'Adres mailowy', 'attr' => ['class' => 'form-control']])
            ->add('isActive', CheckboxType::class, ['required' => false, 'label' => 'Aktywny?', 'attr' => ['class' => 'checkbox-inline custom-width']])
            ->add('note', TextareaType::class, ['required' => false, 'label' => 'Notatka', 'attr' => ['class' => 'form-control']])
            ->add('birthDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data urodzenia', 'attr' => ['class' => 'form-control']])
            ->add('birthPlace', TextType::class, ['label' => 'Miejsce urodzenia', 'attr' => ['class' => 'form-control']])
            ->add('idCard', TextType::class, ['label' => 'Seria i numer dowodu osobistego', 'attr' => ['class' => 'form-control']])
            ->add('idCardExpirationDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data ważności dowodu osobistego', 'attr' => ['class' => 'form-control']])
            ->add('fatherFirstName', TextType::class, ['label' => 'Imię ojca', 'attr' => ['class' => 'form-control']])
            ->add('motherFirstName', TextType::class, ['label' => 'Imię matki', 'attr' => ['class' => 'form-control']])
            ->add('motherFamilySurname', TextType::class, ['label' => 'Nazwisko rodowe matki', 'attr' => ['class' => 'form-control']])
            ->add('maritalStatus', ChoiceType::class, ['choices'=>['Panna/Kawaler'=>'Panna/Kawaler','Mężatka/Żonaty'=>'Mężatka/Żonaty','Rozwiedziona/Rozwiedziony'=>'Rozwiedziona/Rozwiedziony','Wdowa/Wdowiec'=>'Wdowa/Wdowiec'],'label' => 'Stan cywilny', 'attr' => ['class' => 'form-control']])
            ->add('education', ChoiceType::class, ['choices'=>['Podstawowe'=>'Podstawowe','Średnie'=>'Średnie','Wyższe I stopnia'=>'Wyższe I stopnia','Wyższe II stopnia'=>'Wyższe II stopnia'],'label' => 'Wykształcenie', 'attr' => ['class' => 'form-control']])
            ->add('workIndustry', TextType::class, ['label' => 'Branża w której pracuje', 'attr' => ['class' => 'form-control']])
            ->add('companyName', TextType::class, ['label' => 'Nazwa firmy', 'attr' => ['class' => 'form-control']])
            ->add('workLengthExperience', IntegerType::class, ['label' => 'Staż pracy w miesiącach', 'attr' => ['class' => 'form-control']])
            ->add('addressStreetAndNumber', TextType::class, ['label' => 'Adres zamieszkania (ulica i numer budynku)', 'attr' => ['class' => 'form-control']])
            ->add('addressPostCode', TextType::class, ['label' => 'Kod pocztowy', 'attr' => ['class' => 'form-control']])
            ->add('addressCity', TextType::class, ['label' => 'Miejscowość', 'attr' => ['class' => 'form-control']])
            ->add('voivodeship', TextType::class, ['label' => 'Województwo', 'attr' => ['class' => 'form-control']])
            ->add('nationality', TextType::class, ['label' => 'Obywatelstwo', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceAddressStreetAndNumber', TextType::class, ['required' => false,'label' => 'Adres do Korespondencji (ulica i number budynku)', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceAddressPostCode', TextType::class, ['required' => false,'label' => 'Kod pocztowy do Korespondencji', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceAddressCity', TextType::class, ['required' => false,'label' => 'Miejscowość do Korespondencji', 'attr' => ['class' => 'form-control']])
            ->add('correspondenceVoivodeship', TextType::class, ['required' => false,'label' => 'Województwo do Korespondencji', 'attr' => ['class' => 'form-control']])
            ->add('dateFromLivesAtCurrentAddress', DateType::class, ['required' => false,'widget' => 'single_text', 'label' => 'Data od kiedy mieszka pod aktualnym adresem', 'attr' => ['class' => 'form-control']])
            ->add('fixedSalaryNet', IntegerType::class, ['label' => 'Wysokość wynagrodzeń stałych netto w zł.', 'attr' => ['class' => 'form-control']])
            ->add('estimatedTimeSalaryNet', IntegerType::class, ['label' => 'Szacowana wysokość wynagrodzeń doraźnych netto w zł', 'attr' => ['class' => 'form-control']])
            ->add('numberOfPeopleInTheHousehold', IntegerType::class, ['label' => 'Ilość osób w gospodarstwie', 'attr' => ['class' => 'form-control']])
            ->add('totalFamilyIncome', IntegerType::class, ['required' => false,'label' => 'Przychód całego gospodarstwa domowego', 'attr' => ['class' => 'form-control']])
            ->add('typeOfWorkContract', TextType::class, ['label' => 'Rodzaj umowy na jaką jest zatrudniony', 'attr' => ['class' => 'form-control']])
            ->add('startWorkContractDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data zawarcia umowy', 'attr' => ['class' => 'form-control']])
            ->add('endWorkContractDate', DateType::class, ['widget' => 'single_text', 'label' => 'Do kiedy obowiązuje', 'attr' => ['class' => 'form-control']])
            ->add('alimony', CheckboxType::class, ['required' => false, 'label' => 'Czy ma zobowiązanie alimentowe', 'attr' => ['class' => 'checkbox-inline custom-width']])
            ->add('alimonyDateFrom', DateType::class, ['required' => false,'widget' => 'single_text', 'label' => 'Zobowiązanie alimentowe data od', 'attr' => ['class' => 'form-control']])
            ->add('alimonyDateTo', DateType::class, ['required' => false,'widget' => 'single_text', 'label' => 'Zobowiązanie alimentowe data od', 'attr' => ['class' => 'form-control']])
            ->add('alimonyAmount', IntegerType::class, ['required' => false,'label' => 'Wysokość zobowiązania w zł.', 'attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz','attr' => ['class' => 'btn btn-primary']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Lead'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Lead';
    }
}