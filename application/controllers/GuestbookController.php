<?php

class GuestbookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $guest1 = new Application_Model_Guestbook("Paulo",1);
        $guest2 = new Application_Model_Guestbook("João",2);


        $guests = [
            $guest1,
            $guest2    
        ];
        $this->view->entries = $guests;
    }

    public function signAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Guestbook();
 
        if ($this->getRequest()->isPost()) {
            echo $form->getValues();
        }
 
        $this->view->form = $form;
    }


}



