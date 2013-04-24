<?php
// app/Controller/UsersController.php
//App::uses('AuthComponent', 'Controller/Component');
class UsersController extends AppController {

 // public $helpers = array('Html', 'Form','Session', 'Smoothscroll');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('guestlist','guestview','add', 'home');
    }

    public function login() {
         $this->layout = 'login';

    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect(
                array("controller" => "news", 
                      "action" => "index")
            );
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function home() {
        $home = true; //Disables social media icons in footer
        $this->set('home', $home);

        $this->loadModel('News');
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto

        $result = Cache::read('news_guestlist', 'long');
        if (!$result) {
            $result = $this->News->find('all',
         array('conditions' =>  array ( 'News.type' => 'news'  )
            )
         );   
            Cache::write('news_guestlist', $result, 'long');
        }  
         
        $this->set('rs', $result);

        $dean = $this->User->find('all', array('fields' => array('User.id', 
                                                    'User.title_'.Configure::read('Config.language'), 'User.name', 'User.surname'),
                                                'conditions' => array('position' => 'Dean')));
        $this->set('dean', $dean);

        $vDean = $this->User->find('all', array('fields' => array('User.id', 
                                                    'User.title_'.Configure::read('Config.language'), 'User.name', 'User.surname'),
                                                'conditions' => array('position' => 'Vice Dean')));
        $this->set('vDean', $vDean);
    }

    public function guestlist() {
        $this->loadModel('Department');
        $depts = $this->Department->find('list', array(
            'fields' => array('Department.id', 'Department.name_'.Configure::read('Config.language'))
        ));
        $this->set('dept', $depts);

        $cats = $this->User->find('list', array(
            'fields' => array('User.category_'.Configure::read('Config.language'), 'User.category_'.Configure::read('Config.language'))
        ));
        $this->set('cats', $cats);


        if ($this->request->is('post')) {
            $cat = $this->request->data['Filter']['category_'.Configure::read('Config.language')];
            if(!empty($cat)) {
                $a['conditions']['category_'.Configure::read('Config.language')] .= $cat;
                $this->set('cat', $cat);
            }
            $department_id = $this->request->data['Filter']['department_id'];
            if(!empty($department_id)) {
                $a['conditions']['department_id'] .= $department_id;
                $this->set('dept_id', $department_id);
            }
        }
        //Optimization için alt taraf yeterli
        /*array('fields' => array(
            'User.id','User.title_'.Configure::read('Config.language'),
            'User.name','User.surname','User.department_id','User.officeno','User.tel','User.email'));*/

        $a = $this->User->find('all', $a);

        $this->layout = 'guest_'.Configure::read('Config.language');   
            // ziyaretçinin dile göre layout sayfası seçilecek oto
        $this->set('row',$a );
    } 

    public function guestview($id) {
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto

        $j = $this->User->findById($id); 
        $this->set('a', $j); 
    }

    public function index() { 
            $this->set('r', $this->User->find('all', array(
            'fields' => array('User.id','User.name','User.surname','User.username','User.email'))));
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
