<?php

class AppController extends Controller 
{
    var $components = array('Auth', 'RequestHandler');
    var $helpers = array('Html', 'Form', 'Javascript', 'Cache', 'Session');
    
    function beforeFilter()
    {
        $this->RequestHandler->setContent('json', 'text/json');
        
    	$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => TRUE);
	    $this->Auth->autoRedirect = TRUE;
	    $this->Auth->loginRedirect = array('admin' => TRUE);
		$this->Auth->loginError = 'Error attempting to log in. Please try again.';
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login', 'admin' => TRUE);

        if (
            isset($this->params['admin']) 
            && $this->params['admin']
        ) 
        {
            $this->layout = 'admin';
        }
    }
    
}

?>