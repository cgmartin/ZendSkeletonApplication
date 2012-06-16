<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController,
    Zend\View\Model\ViewModel,
    Application\Form\Html5Form;

class TestController extends ActionController
{
    public function formAction()
    {
        $form = new Html5Form('my-form');
        $form
            ->prepareElements() // TODO: pass in award lists from database
            ->setAttributes(array(
                'action' => $this->url()->fromRoute('test-form'),
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
