<?php

class ProgramController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

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
    
    $this->loadModel('Lang');
    $j = $this->Lang->find('list', array(
        'fields' => array('Lang.name')
    ));
    $this->set('lang', $j);

    $this->loadModel('Department');
    $b = $this->Department->find('list');
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
        $this->set('rs', $this->Program->find('all'));
    }
 
    public function add() {
    
    $this->loadModel('Lang');
    $j = $this->Lang->find('list', array(
        'fields' => array('Lang.name')
    ));
    $this->set('lang', $j);

    $this->loadModel('Department');
    $b = $this->Department->find('list');
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