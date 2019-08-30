<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class WealthByAppraiserType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', TextType::class, ['label' => 'Rodzaj majątku', 'attr' => ['class' => 'form-control']])
            ->add('estimatedValuation', NumberType::class, ['label' => 'Szacowana wartość', 'attr' => ['class' => 'form-control','step' => '0.01']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'btn btn-danger btn-sm']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\WealthByAppraiserType'
        ));
        
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'WealthByAppraiserType';
    }
}