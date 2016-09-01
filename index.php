<?php

    $rdir = realpath(dirname('SCRIPT_NAME'));

    set_include_path($rdir . '/library' . PATH_SEPARATOR . get_include_path());

    require_once('Zend/Loader.php');

    try {
        Zend_Loader::loadClass('Zend_Controller_Front');

        $fcontroller = Zend_Controller_Front::getInstance();

        $fcontroller->throwExceptions(TRUE);
        $fcontroller->setParam('noErrorHandler', TRUE);
        $fcontroller->setControllerDirectory("$rdir/application/controllers");

        $fcontroller->dispatch();

    } catch (Exception $e) {
        $contentType = 'text/html';
        header("Content-Type: $contentType; charset=utf-8");
        print 'An unexpected error occurred:';
        print '<h2>Unexpected Exception: ' . $e->getMessage() . '</h2><br /><pre>';
        print $e->getTraceAsString();
    }
?>