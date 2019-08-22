<?php
 
namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 
class SharesType extends AbstractType
{   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameAndType', TextType::class, ['label' => 'Nazwa i rodzaj', 'attr' => ['class' => 'form-control']])
            ->add('numberOfSharesHeld', NumberType::class, ['label' => 'Ilość', 'attr' => ['class' => 'form-control']])
            ->add('value', NumberType::class, ['label' => 'Wartość', 'attr' => ['class' => 'form-control']])
            ->add('save', SubmitType::class, ['label' => 'Zapisz', 'attr' => ['class' => 'form-control']])
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SharesType'
        ));
        
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'SharesType';
    }
}