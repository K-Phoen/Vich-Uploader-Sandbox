<?php

namespace KPhoen\Bundle\MultipleUploadableBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CarAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('front_image', 'file')
            ->add('back_image', 'file')
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
            ->add('front_link', 'string', array('template' => 'KPhoenMultipleUploadableBundle:Car:list_front_link.html.twig'))
            ->add('back_link', 'string', array('template' => 'KPhoenMultipleUploadableBundle:Car:list_back_link.html.twig'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                )
            ))
        ;
    }
}
