<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
 
class LeasingType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('leasingThing', TextType::class, ['label' => 'Przedmiot leasingu', 'attr' => ['class' => 'form-control']])
            ->add('amount', NumberType::class, ['label' => 'Kwota', 'attr' => ['class' => 'form-control','step' => '0.01']])
            ->add('grantingDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data udzielenia kredytu', 'attr' => ['class' => 'form-control']])
            ->add('repaymentDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data spłaty kredytu', 'attr' => ['class' => 'form-control']])
            ->add('monthlyInstallment', NumberType::class, ['label' => 'Miesięczna rata', 'attr' => ['class' => 'form-control','step' => '0.01']])
            ->add('bankName', TextType::class, ['label' => 'Nazwa banku', 'attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'btn btn-danger btn-sm']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Leasing'
        ));
        
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'Leasing';
    }
}