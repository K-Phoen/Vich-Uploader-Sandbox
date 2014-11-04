<?php

namespace KPhoen\Bundle\MultipleUploadableBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BikeImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('image', 'vich_file', array(
                'required'      => true,
                'mapping'       => 'bike_mapping',
                'allow_delete'  => false,
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KPhoen\Bundle\MultipleUploadableBundle\Entity\BikeImage',
        ));
    }

    public function getName()
    {
        return 'bike_image';
    }
}
