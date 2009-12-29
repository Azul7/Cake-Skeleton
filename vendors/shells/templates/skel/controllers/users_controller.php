<?php
class UsersController extends AppController 
{
	var $name = 'Users';
	var $helpers = array('Html', 'Form');
	
	function beforeFilter()
	{
	    parent::beforeFilter();
	    
	    $this->Auth->allow('admin_login', 'admin_logout');
	}
    
    function admin_login()
    {
    }
    
    function admin_logout()
    {
        $this->redirect($this->Auth->logout());
    }
    
	function admin_index() 
	{
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = NULL) 
	{
		if (!$id) 
		{
			$this->Session->setFlash(__('Invalid User.', TRUE));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->set('user', $this->User->read(NULL, $id));
	}

	function admin_add() 
	{
		if (!empty($this->data)) 
		{
			$this->User->create();
			if ($this->User->save($this->data)) 
			{
				$this->Session->setFlash(__('The User has been saved', TRUE));
				$this->redirect(array('action'=>'index'));
			} 
			else 
			{
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', TRUE));
			}
		}
	}

	function admin_edit($id = NULL) {
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash(__('Invalid User', TRUE));
			$this->redirect(array('action'=>'index'));
		}
		
		if (!empty($this->data)) 
		{
			if ($this->User->save($this->data)) 
			{
				$this->Session->setFlash(__('The User has been saved', TRUE));
				$this->redirect(array('action'=>'index'));
			} 
			else 
			{
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', TRUE));
			}
		}
		
		if (empty($this->data)) 
		{
			$this->data = $this->User->read(NULL, $id);
		}
	}

	function admin_delete($id = NULL) 
	{
		if (!$id) 
		{
			$this->Session->setFlash(__('Invalid id for User', TRUE));
			$this->redirect(array('action'=>'index'));
		}
		
		if ($this->User->del($id)) 
		{
			$this->Session->setFlash(__('User deleted', TRUE));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>