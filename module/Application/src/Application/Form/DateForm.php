<?php

namespace Application\Form;

use Zend\Form\Form,
    Zend\Form\Element\Date as DateElement,
    Zend\InputFilter\InputFilter,
    Zend\InputFilter\Factory as InputFilterFactory,
    Zend\Filter\FilterChain,
    Zend\Validator;

class DateForm extends Form
{
    /**
     * @return DateForm
     */
    public function prepareElements()
    {
        /*
        $localDateTimeElement = new Element('localDateTime');
        $localDateTimeElement->setAttributes(array(
            'id' => 'localDateTimeInput',
        ));
        $this->add($localDateTimeElement);

        $dateTimeElement = new Element('dateTime');
        $dateTimeElement->setAttributes(array(
            'id' => 'dateTimeInput',
        ));
        $this->add($dateTimeElement);
        */

        $dateElement = new DateElement('date');
        $dateElement->setAttributes(array(
            'id' => 'dateInput',
        ));
        $this->add($dateElement);

        /*
        $timeElement = new Element('time');
        $timeElement->setAttributes(array(
            'id' => 'timeInput',
        ));
        $this->add($timeElement);

        $monthElement = new Element('month');
        $monthElement->setAttributes(array(
            'id' => 'monthInput',
        ));
        $this->add($monthElement);

        $weekElement = new Element('week');
        $weekElement->setAttributes(array(
            'id' => 'weekInput',
        ));
        $this->add($weekElement);
        */

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