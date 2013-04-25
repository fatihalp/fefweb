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
        $b = $this->Department->findById($id); 
        $this->set('b', $b);

        $this->loadModel('User');
        $users = $this->User->find('all', array(
                                    'fields' => array('User.id', 'User.name','User.surname',
                                        'User.title_'.Configure::read('Config.language'),'User.email','User.tel','User.officeno'),
                                    'conditions' => array('department_id' => $id,'status_en' => 'Full Time',
                                        'category_en' => 'Faculty Member')));
        $this->set('full', $users);

        $users2 = $this->User->find('all', array(
                                    'fields' => array('User.id', 'User.name','User.surname',
                                        'User.title_'.Configure::read('Config.language'),'User.email','User.tel','User.officeno'),
                                    'conditions' => array('department_id' => $id,'status_en' => 'Part Time',
                                        'category_en' => 'Senior Instructor')));
        $this->set('part', $users2);

        $users3 = $this->User->find('all', array(
                                    'fields' => array('User.id', 'User.name','User.surname',
                                        'User.title_'.Configure::read('Config.language'),'User.email','User.tel','User.officeno'),
                                    'conditions' => array('department_id' => $id, 'category_en' => 'Research Assistant')));
        $this->set('assist', $users3);

        $chair = $this->User->find('all', array(
                                    'fields' => array('User.id', 'User.name','User.surname',
                                        'User.title_'.Configure::read('Config.language')),
                                    'conditions' => array('department_id' => $id, 'position' => 'Chair')));
        $this->set('chair', $chair);

        $vChair = $this->User->find('all', array(
                                    'fields' => array('User.id', 'User.name','User.surname',
                                        'User.title_'.Configure::read('Config.language')),
                                    'conditions' => array('department_id' => $id, 'position' => 'Vice Chair')));
        $this->set('vChair', $vChair);

        $this->loadModel('Program');
        $prog = $this->Program->find('all', array(
                                    'fields' => array('Program.id', 'Program.name_'.Configure::read('Config.language'),
                                        'Program.type'),
                                    'conditions' => array('department_id' => $id)));
        $this->set('prog', $prog);
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
                $filename = WWW_ROOT.'upload/dept/';
                $filename .=    $this->Department->getInsertID();  
                $filename .=   '.jpg';
         
                echo move_uploaded_file($this->request->data['Department']['resim']['tmp_name'],$filename);

                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }

    public function edit($id = null) { 
    	$post = $this->Department->findById($id); 
        $this->set('id', $id);
	    if ($this->request->is('post') || $this->request->is('put')) {
	        $this->Department->id = $id;
	        if ($this->Department->save($this->request->data)) {
                $filename = WWW_ROOT.'upload/dept/';
                $filename .=   $id; 
                $filename .=   '.jpg';
         
                echo move_uploaded_file($this->request->data['Department']['resim']['tmp_name'],$filename);

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