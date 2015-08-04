<?php

namespace Api\SugarCRMBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Form type for a project choice
 *
 * @author Jérôme Weber <jerome.weber@stadline.com>
 *
 */
class AccountType extends AbstractType
{

    /**
     * Constructor
     *
     */
    public function __construct()
    {
    }


    /**
     * (non-PHPdoc)
     * @see \Symfony\Component\Form\AbstractType::getParent()
     *
     * @return string
     */
    public function getParent()
    {
        return 'text';
    }

    /**
     * (non-PHPdoc)
     *
     * @param OptionsResolverInterface $resolver
     *
     * @see \Symfony\Component\Form\AbstractType::setDefaultOptions()
     * @return void
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'attr' => array(
        	   'style' => "width:200px;"
            )
        ));
    }
        
    /**
     * (non-PHPdoc)
     * @see \Symfony\Component\Form\FormTypeInterface::getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'sugar_account';
    }
}
