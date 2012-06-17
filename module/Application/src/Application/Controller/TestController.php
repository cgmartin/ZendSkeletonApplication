<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController,
    Zend\View\Model\ViewModel,
    Application\Form\EmailForm,
    Application\Form\ColorForm;

class TestController extends ActionController
{
    public function formEmailAction()
    {
        $form = new EmailForm('my-form');
        $form
            ->prepareElements() // TODO: pass in award lists from database
            ->setAttributes(array(
                'action' => $this->url()->fromRoute('test-form-email'),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->post();
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
            ->prepareElements() // TODO: pass in award lists from database
            ->setAttributes(array(
                'action' => $this->url()->fromRoute('test-form-color'),
            ));

        $data = array();
        if ($this->getRequest()->isPost()) {
            // Postback
            $postData = $this->getRequest()->post();
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
