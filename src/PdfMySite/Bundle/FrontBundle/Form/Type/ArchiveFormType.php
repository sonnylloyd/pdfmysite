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

namespace PdfMySite\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArchiveFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('title', 'text', array(
            'required' => true,
            'label' => 'Title'
        ));
    }

    public function getName() {
        return 'archive';
    }

}
