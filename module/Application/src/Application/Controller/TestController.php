<?php

namespace Application\Controller;

use Application\Form\MultiCheckboxForm;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\EmailForm,
    Application\Form\ColorForm,
    Application\Form\DateForm,
    Application\Form\NumberForm,
    Application\Form\Zf2358Form;

class TestController extends AbstractActionController
{
    public function formEmailAction()
    {
        $form = new EmailForm('my-form');
        $form
            ->prepareElements()
            ->setAttributes(array(
                'action' => $this->url()->fromRoute(
                    'application',
                    array('controller' => 'test', 'action' => 'form-email'
                )),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->getPost();
            $form->setData($postData);
            if ($form->isValid()) {
                $data = $form->getData();
            } else {
                $data = $postData;
            }
        }

        $view = new ViewModel(array(
            'form' => $form,
            'data' => $data,
        ));
        return $view;
    }

    public function formColorAction()
    {
        $form = new ColorForm('my-form');
        $form
            ->prepareElements()
            ->setAttributes(array(
                'action' => $this->url()->fromRoute(
                    'application/default',
                    array('controller' => 'test', 'action' => 'form-color'
                )),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->getPost();
            $form->setData($postData);
            if ($form->isValid()) {
                $data = $form->getData();
            } else {
                $data = $postData;
            }
        }

        $view = new ViewModel(array(
            'form' => $form,
            'data' => $data,
        ));
        return $view;
    }

    public function formMultiCheckboxAction()
    {
        $form = new MultiCheckboxForm('my-form');
        $form
            ->prepareElements()
            ->setAttributes(array(
                'action' => $this->url()->fromRoute(
                    'application/default',
                    array('controller' => 'test', 'action' => 'form-multi-checkbox'
                )),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->getPost();
            $form->setData($postData);
            if ($form->isValid()) {
                $data = $form->getData();
            } else {
                $data = $postData;
            }
        }

        $view = new ViewModel(array(
            'form' => $form,
            'data' => $data,
        ));
        return $view;
    }

    public function formDateAction()
    {
        $form = new DateForm('my-form');
        $form
            ->prepareElements()
            ->setAttributes(array(
                'action' => $this->url()->fromRoute(
                    'application/default',
                    array('controller' => 'test', 'action' => 'form-date'
                )),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->getPost();
            $form->setData($postData);
            if ($form->isValid()) {
                $data = $form->getData();
            } else {
                $data = $postData;
            }
        }

        $view = new ViewModel(array(
            'form' => $form,
            'data' => $data,
        ));
        return $view;
    }

    public function zf2358Action()
    {
        $form = new Zf2358Form('my-form');
        $form
            ->prepareElements()
            ->setAttributes(array(
                'action' => $this->url()->fromRoute(
                    'application/default',
                    array('controller' => 'test', 'action' => 'zf2358'
                )),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->getPost();
            $form->setData($postData);
            if ($form->isValid()) {
                $data = $form->getData();
            } else {
                $data = $postData;
            }
        }

        $view = new ViewModel(array(
            'form' => $form,
            'data' => $data,
        ));
        return $view;
    }

    public function formNumberAction()
    {
        $form = new NumberForm('my-form');
        $form
            ->prepareElements()
            ->setAttributes(array(
                'action' => $this->url()->fromRoute(
                    'application/default',
                    array('controller' => 'test', 'action' => 'form-number'
                )),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->getPost();
            $form->setData($postData);
            if ($form->isValid()) {
                $data = $form->getData();
            } else {
                $data = $postData;
            }
        }

        $view = new ViewModel(array(
            'form' => $form,
            'data' => $data,
        ));
        return $view;
    }
}
