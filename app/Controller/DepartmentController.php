<?php
class DepartmentController  extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() { 
        $this->set('r', $this->Department->find('all'));
    }

    public function sil($id) { 

	    if ($this->Department->delete($id)) {
	        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}


	public function add() {
        if ($this->request->is('post')) {
            $this->Department->create();
            if ($this->Department->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }



    public function edit($id = null) { 
    	$post = $this->Department->findById($id); 

    	 $this->loadModel('Lang');
    	 $this->set('l', $this->Lang->find('list'));

	    if ($this->request->is('post') || $this->request->is('put')) {
	        $this->Department->id = $id;
	        if ($this->Department->save($this->request->data)) {
	            $this->Session->setFlash('Your post has been updated.');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your post.');
	        }
	    }

	    if (!$this->request->data) {
	        $this->request->data = $post;
	    }
	}




}