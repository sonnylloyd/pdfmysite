<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArchiveFormType
 *
 * @author sonny.lloyd
 */

namespace PdfMySite\Bundle\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArchiveFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('url', 'text', array(
            'required' => true,
            'label' => 'Enter the websites Url:'
        ));
        $builder->add('archive', 'checkbox', array(
            'label' => 'archive',
            'required' => false,
             'data' => true
        ));
    }

    public function getName() {
        return 'archive';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'PdfMySite\Bundle\FrontBundle\Entity\Archives'
        );
    }

}
