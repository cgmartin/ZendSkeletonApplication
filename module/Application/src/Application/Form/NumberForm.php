<?php

namespace Application\Form;

use Zend\Form\Form,
    Zend\Form\Element\Number as NumberElement,
    Zend\InputFilter\InputFilter,
    Zend\InputFilter\Factory as InputFilterFactory,
    Zend\Filter\FilterChain,
    Zend\Validator;

class NumberForm extends Form
{
    /**
     * @return DateForm
     */
    public function prepareElements()
    {

        $numElement = new NumberElement('num');
        $numElement->setAttributes(array(
            'id' => 'numInput',
            'step' => 'any',
        ));
        $this->add($numElement);

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