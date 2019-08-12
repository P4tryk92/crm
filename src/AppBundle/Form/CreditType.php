<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class CreditType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount', NumberType::class, ['label' => 'Kwota', 'attr' => ['class' => 'form-control']])
            ->add('grantingDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data udzielenia kredytu', 'attr' => ['class' => 'form-control']])
            ->add('repaymentDate', DateType::class, ['widget' => 'single_text', 'label' => 'Data spłaty kredytu', 'attr' => ['class' => 'form-control']])
            ->add('monthlyInstallment', TextType::class, ['label' => 'Miesięczna rata', 'attr' => ['class' => 'form-control']])
            ->add('bankName', TextType::class, ['label' => 'Nazwa banku', 'attr' => ['class' => 'form-control']])
            ->add('profitMargin', NumberType::class, ['label' => 'Wysokość marży kredytu', 'attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'form-control']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Credit'
        ));
        
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'Credit';
    }
}