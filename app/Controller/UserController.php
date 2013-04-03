<?php
// app/Controller/UsersController.php
class UserController extends AppController {

    public function index() { 
            $this->set('r', $this->User->find('all'));
    }
    public function isAuthorized($user) {
        if ($user['role'] == 'admin') {
            return true;
        }
        if (in_array($this->action, array('edit', 'delete'))) {
            if ($user['id'] != $this->request->params['pass'][0]) {
                return false;
            }
        }
        return true;
    }
  
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirect());   
            } else {
                $this->Session->setFlash('Your username/password combination was incorrect');
            }
        }
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
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
         
            if ($this->User->save($this->data)) {
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
