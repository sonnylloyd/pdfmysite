<?php

namespace PdfMySite\Bundle\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArchivesAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id', 'interger', array('label' => 'Archive Id'))
            ->add('url', 'string', array('label' => 'Archive Url'))
            ->add('ipaddress', 'string', array('label' => 'Ip Address'))
            ->add('description', 'text', array('label' => 'text'))
            ->add('keywords', 'text', array('label' => 'keywords'))
            ->add('title', 'string', array('label' => 'title'))
            ->add('slug', 'string', array('label' => 'slug'))
            ->add('active', 'boolean', array('label' => 'active'))
            ->add('archive', 'boolean', array('label' => 'Show in archive'))
            ->add('file', 'string', array('label' => 'File name'))
            ->add('created', 'datetime', array('label' => 'Created'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('url')
            ->add('ipaddress')
            ->add('description')
            ->add('keywords')
            ->add('title')
            ->add('slug')
            ->add('active')
            ->add('archive')
            ->add('file')
            ->add('created')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('url')
            ->add('ipaddress')
            ->add('description')
            ->add('keywords')
            ->add('title')
            ->add('slug')
            ->add('active')
            ->add('archive')
            ->add('file')
            ->add('created')
        ;
    }
}