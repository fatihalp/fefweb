<?php

class CoursesController extends AppController {
    public $helpers = array('Html', 'Form', 'Session', 'Department', 'Course');
    public $components = array('Session');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('guestlist','guestview','currview');
    }



    public function index() {
        $this->set('courses', $this->Course->find('all', array(
            'fields' => array('Course.id', 'Course.code_en', 'Course.code_tr', 'Course.name_en', 'Course.name_tr', 'Course.department_id')
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

    public function guestview($id) {
        $this->layout = 'guest_'.Configure::read('Config.language');
        $this->set('a', $this->Course->findById($id));
    }

    public function currview($id) {
        $this->loadModel('Program');
        $b = $this->Program->findById($id);
        $this->set('b', $b);

        $this->layout = 'guest_'.Configure::read('Config.language');
        if (!$id) {
            throw new NotFoundException(__('Invalid course'));
        }

        $a = $this->Course->find('all', array('conditions' => array('Course.program_id' => $id)));
        if (!$a) {
            throw new NotFoundException(__('Invalid course'));
        }
        $this->set('a', $a);
        $count = $this->Course->find('count', array('conditions' => array('Course.program_id' => $id), 
            'fields' => array('DISTINCT Course.ac_term'),
            'group' => array('Course.ac_term')));
        $this->set('c', $count);
    }

    public function add() {
    	$this->loadModel('Department');
    	$depts = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_en')
        ));
    	$this->set('dept', $depts);

        $this->loadModel('Program');
        $progs = $this->Program->find('list', array(
            'fields' => array('Program.id', 'Program.name_en')
        ));
        $this->set('prog', $progs);
    	
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
    	$depts = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_en')
        ));
    	$this->set('dept', $depts);

        $this->loadModel('Program');
        $progs = $this->Program->find('list', array(
            'fields' => array('Program.id', 'Program.name_en')
        ));
        $this->set('prog', $progs);
    	
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