<?php

namespace KPhoen\Bundle\MultipleUploadableBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use KPhoen\Bundle\MultipleUploadableBundle\Form\Type\BikeImageType;

class BikeAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('images', 'collection', array(
                'type'          => new BikeImageType(),
                'allow_add'     => true,
                'allow_delete'  => true,
                'by_reference'  => false,
                'options'       => array(
                    'required' => $this->getSubject()->getId() === null
                ),
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                )
            ))
        ;
    }
}
