<?php

class IndexController extends Zend_Controller_Action
{

	/*
    public function init()
    {
        /* Initialize action controller here */
        /* 
        $this->view->assign('title', 'Hello World!');
    }
    */

    public function indexAction()
    {
        // action body
        $this->view->assign('title', 'Hello World');
    }

    public function homeAction()
    {
        // action body
        $this->view->assign('title', 'Hello World!!!');
    }
}

