<?php
// src/Acme/LibraryBundle/Form/Type/BookType.php

namespace Acme\LibraryBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\AbstractType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title');
        $builder->add('isbn');
    }

    public function getDefaultOptions()
    {
        return array(
            'data_class' => 'Acme\LibraryBundle\Model\Book',
        );
    }

    public function getName()
    {
        return 'book';
    }
}

