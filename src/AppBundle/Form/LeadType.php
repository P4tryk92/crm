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
 
class LeadType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('lastName', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('pin', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('phoneNumber', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('email', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('isActive', CheckboxType::class, ['attr' => ['class' => 'form-style']])
            ->add('note', TextareaType::class, ['attr' => ['class' => 'form-style']])
            ->add('birthDate', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('birthPlace', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('idCard', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('idCardExpirationDate', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('fatherFirstName', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('motherFirstName', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('motherFamilySurname', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('maritalStatus', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('education', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('workIndustry', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('companyName', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('workLengthExperience', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('addressStreetAndNumber', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('addressPostCode', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('addressCity', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('voivodeship', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('nationality', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('correspondenceAddressStreetAndNumber', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('correspondenceAddressPostCode', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('correspondenceAddressCity', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('correspondenceVoivodeship', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('dateFromLivesAtCurrentAddress', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('fixedSalaryNet', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('estimatedTimeSalaryNet', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('numberOfPeopleInTheHousehold', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('totalFamilyIncome', IntegerType::class, ['attr' => ['class' => 'form-style']])
            ->add('typeOfWorkContract', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('startWorkContractDate', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('endWorkContractDate', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('alimony', TextType::class, ['attr' => ['class' => 'form-style']])
            ->add('alimonyDateFrom', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('alimonyDateTo', DateType::class, ['widget' => 'single_text', 'attr' => ['class' => 'form-style']])
            ->add('alimonyAmount', IntegerType::class, ['attr' => ['class' => 'form-style']])
            




            ->add('save', SubmitType::class, ['label' => 'zapisz', 'attr' => ['class' => 'form-style']])
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