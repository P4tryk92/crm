<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class WealthType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', TextType::class, ['label' => 'Rodzaj majątku', 'attr' => ['class' => 'form-control']])
            ->add('estimatedValuation', NumberType::class, ['label' => 'Szacowana wartość', 'attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'form-control']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\WealthType'
        ));
        
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'WealthType';
    }
}