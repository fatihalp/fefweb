<?php
class DepartmentController  extends AppController {
    public $helpers = array('Html', 'Form');
 
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('guestlist','guestview');
    }

    public function index() { 
        $this->set('r', $this->Department->find('all', array(
                    'fields' => array('Department.id','Department.name_en','Department.name_tr'))));
    }
    
    public function guestlist() { 
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto 
    
        $b = $this->Department->find('all'); 
        $this->set('rs', $b); 
    }

    public function guestview($id) {  
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto
        $this->set('id', $id); 
        $this->loadModel('Department');
        $b = $this->Department->findById($id); 
        $this->set('b', $b); 
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