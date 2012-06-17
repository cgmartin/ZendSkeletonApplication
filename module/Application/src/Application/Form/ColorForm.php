<?php

namespace Application\Form;

use Zend\Form\Form,
    Zend\Form\Element,
    Zend\InputFilter\InputFilter,
    Zend\InputFilter\Factory as InputFilterFactory,
    Zend\Filter\FilterChain,
    Zend\Validator;

class ColorForm extends Form
{
    /**
     * @return ColorForm
     */
    public function prepareElements(array $awardLists = array())
    {
        $colorElement = new Element\Color('color');
        $colorElement->setAttributes(array(
            'class' => 'span1',
        ));
        $this->add($colorElement);

        $inputFilter = new InputFilter();
        $this->setInputFilter($inputFilter);

        return $this;
    }

    /**
     * Validate the form
     *
     * Typically, will proxy to the composed input filter.
     *
     * @return bool
     */
    public function isValid()
    {
        $isvalid = parent::isValid();
        //print_r($inputFilter->getMessages()); die("Inside isValid");
        return $isvalid;
    }
}