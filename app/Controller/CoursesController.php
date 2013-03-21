<?php

class CoursesController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('courses', $this->Course->find('all', array(
            'contain' => array('Department'),
            'fields' => array('Course.id', 'Course.code', 'Course.name', 'Department.name')
        )));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid course'));
        }

        $course = $this->Course->findById($id);
        if (!$course) {
            throw new NotFoundException(__('Invalid course'));
        }
        $this->set('course', $course);
    }

    public function add() {
    	$this->loadModel('Department');
    	$depts = $this->Department->find('list');
    	$this->set('dept', $depts);
    	
        if ($this->request->is('post')) {
            $this->Course->create();
            if ($this->Course->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }

    public function edit($id = null) {
    	$this->loadModel('Department');
    	$depts = $this->Department->find('list');
    	$this->set('dept', $depts);
    	
	    if (!$id) {
	        throw new NotFoundException(__('Invalid course'));
	    }

	    $course = $this->Course->findById($id);
	    if (!$course) {
	        throw new NotFoundException(__('Invalid course'));
	    }

	    if ($this->request->is('post') || $this->request->is('put')) {
	        $this->Course->id = $id;
	        if ($this->Course->save($this->request->data)) {
	            $this->Session->setFlash('Your post has been updated.');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your course.');
	        }
	    }

	    if (!$this->request->data) {
	        $this->request->data = $course;
	    }
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if ($this->Course->delete($id)) {
	        $this->Session->setFlash('The course with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}

}
?>