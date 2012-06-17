<?php

namespace Application\Form;

use Zend\Form\Form,
    Zend\Form\Element,
    Zend\InputFilter\InputFilter,
    Zend\InputFilter\Input,
    Zend\InputFilter\Factory as InputFilterFactory,
    Zend\Filter\FilterChain,
    Zend\Validator;

class MultiCheckboxForm extends Form
{
    /**
     * @return MultiCheckboxForm
     */
    public function prepareElements(array $awardLists = array())
    {
        $multicbElement = new Element('multicb');
        $multicbElement->setAttributes(array(
            'id' => 'my-multicb',
            'labelAttributes' => array(
                'class' => 'checkbox inline',
            ),
            'uncheckedValue' => 'uncheckedValue',
            'options' => array(
                'Option 1' => 'option1',
                'Option 2' => 'option2',
                'Option 3' => 'option3',
                'Option 4' => 'option4',
                'Option 5' => 'option5',
            ),
        ));
        $this->add($multicbElement);

        $radioElement = new Element('radio');
        $radioElement->setAttributes(array(
            'id' => 'my-radio',
            'labelAttributes' => array(
                'class' => 'radio inline',
            ),
            'uncheckedValue' => 'uncheckedValue',
            'options' => array(
                'Option 1' => 'option1',
                'Option 2' => 'option2',
                'Option 3' => 'option3',
                'Option 4' => 'option4',
                'Option 5' => 'option5',
            ),
        ));
        $this->add($radioElement);



        $inputFilter = new InputFilter();

        $multiCbInput = new Input('multicb');
        $multiCbInput->setRequired(false);
        $inputFilter->add($multiCbInput);

        $radioInput = new Input('radio');
        $radioInput->setRequired(false);
        $inputFilter->add($radioInput);

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