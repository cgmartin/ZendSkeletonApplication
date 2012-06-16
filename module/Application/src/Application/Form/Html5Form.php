<?php

namespace Application\Form;

use Zend\Form\Form,
    Zend\Form\Element,
    Zend\InputFilter\InputFilter,
    Zend\InputFilter\Factory as InputFilterFactory,
    Zend\Filter\FilterChain,
    Zend\Validator;

class Html5Form extends Form
{

    /**
     * @return DateForm
     */
    public function prepareElements(array $awardLists = array())
    {
        $singleEmailElement = new Element\Email('single-email');
        $singleEmailElement->setAttributes(array(
            'type'        => 'email',
            'multiple'    => false,
        ));
        $this->add($singleEmailElement);

        $multiEmailElement = new Element\Email('multi-email');
        $multiEmailElement->setAttributes(array(
            'type'        => 'email',
            'multiple'    => true,
        ));
        $this->add($multiEmailElement);


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