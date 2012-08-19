<?php

namespace Application\Form;

use Zend\Form\Form,
    Zend\Form\Element,
    Zend\InputFilter\InputFilter,
    Zend\InputFilter\Input,
    Zend\InputFilter\Factory as InputFilterFactory,
    Zend\Filter\FilterChain,
    Zend\Validator;

class Zf2358Form extends Form
{
    /**
     * @return MultiCheckboxForm
     */
    public function prepareElements(array $awardLists = array())
    {
        $mySelectElement = new Element('myselect');
        $mySelectElement->setAttributes(array(
            'id' => 'myselect',
            'type' => 'select',
            'options' => array(
                ''         => '',
                'Option 1' => 'option1',
                'Option 2' => 'option2',
                'Option 3' => 'option3',
                'Option 4' => 'option4',
                'Option 5' => 'option5',
            ),
        ));
        $this->add($mySelectElement);

        $myCheckboxElement = new Element\Checkbox('mycheckbox');
        $myCheckboxElement->setAttributes(array(
            'id' => 'mycheckbox',
            'type' => 'checkbox',
            'useHiddenElement' => true,
            'options' => array(
                'checkedValue'   => 'customCheckedValue',
                'uncheckedValue' => 'customUncheckedValue',
            ),
        ));
        $this->add($myCheckboxElement);

        $myTextElement = new Element('mytext');
        $myTextElement->setAttributes(array(
            'id' => 'mytext',
        ));
        $this->add($myTextElement);

        $inputFilter = new InputFilter();

        $mySelectInput = new Input('myselect');
        $mySelectInput->setRequired(true);
        $inputFilter->add($mySelectInput);

        $myCheckboxInput = new Input('mycheckbox');
        $myCheckboxInput->setRequired(true);
        $inputFilter->add($myCheckboxInput);

        $myTextInput = new Input('mytext');
        $myTextInput->setRequired(true);
        $inputFilter->add($myTextInput);

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