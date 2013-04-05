<?php
// app/Controller/UsersController.php
//App::uses('AuthComponent', 'Controller/Component');
class UsersController extends AppController {

  

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('guestlist','guestview','add');
    }

    public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
        }
    } 
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function guestlist() { 
           $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto
            $this->set('row', $this->User->find('all'));
    } 

    public function guestview($id) {
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto

        $j = $this->User->findById($id); 
        $this->set('a', $j); 
    }

    public function index() { 
            $this->set('r', $this->User->find('all'));
    } 

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() { 
        $this->loadModel('Department');
        $depts = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_en')
        ));
        $this->set('dept', $depts);

        if ($this->request->is('post')) {
            $this->User->create();  
            if ($this->User->save($this->request->data)) {
                $filename = WWW_ROOT.'upload/';
                $filename .=    $this->User->getInsertID();  
                $filename .=   '.jpg';
         
     echo move_uploaded_file($this->request->data['User']['resim']['tmp_name'],$filename);
          
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    
          
    }

    public function edit($id = null) {
         $r = $this->User->findById($id);
         $this->set('r', $r);

        $this->loadModel('Department');
        $depts = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_en')
        ));
        $this->set('dept', $depts);

         $this->set('id', $id);
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {

                $filename = WWW_ROOT.'upload/';
                $filename .=   $id; 
                $filename .=   '.jpg';
         
     echo move_uploaded_file($this->request->data['User']['resim']['tmp_name'],$filename);
          

                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
