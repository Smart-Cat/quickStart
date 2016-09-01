<?php

class PageController extends Zend_Controller_Action
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
        //return "Hello World";
        $this->view->assign('title', 'Hello World!!!');
    }

    public function homeAction()
    {
        //return "Hello World";
        $this->view->assign('title', 'Hello World!!!');
    }
}