<?php
class ProgramController extends AppController {
    public $helpers = array('Html', 'Form', 'Session', 'Lang', 'Program');
    public $components = array('Session');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('guestlist','guestview');
    }
  
    public function guestlist() {
        $this->layout = 'guest_'.Configure::read('Config.language');
        $b = $this->Program->find('all', array('fields' => array('DISTINCT Program.department_id',)));
        $this->set('rs',$b );
    }
    
    public function guestview($id) {
        $this->layout = 'guest_'.Configure::read('Config.language');
        $this->set('a', $this->Program->findById($id));
    }


    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Program->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
	}

    public function edit($id = null) {
        $this->loadModel('Department');
        $b = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_en')
            ));
        $this->set('b', $b);

        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Program->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Program->id = $id;
            if ($this->Program->save($this->request->data)) {
                $this->Session->setFlash('Your Program has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
	}

    public function index() {
        $this->set('rs', $this->Program->find('all', array(
                        'fields' => array('Program.id','Program.name_en','Program.name_tr'))));
    }
 
    public function add() {
        $this->loadModel('Department');
        $b = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_en')
            ));
        $this->set('b', $b);

        if ($this->request->is('post')) {
            $this->Program->create();
            if ($this->Program->save($this->request->data)) {
                $this->Session->setFlash('Your Program has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }
}