<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
    
    public function _initRoute()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $route = new Zend_Controller_Router_Route_Static(
            '/',
            array('controller' => 'index', 'action' => 'index')
        );
        
        
        
        $router->addRoute('/', $route);
    }
    
}


