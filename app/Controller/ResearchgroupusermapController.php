<?php 
    class ResearchgroupusermapController extends AppController {
        public $helpers = array('Html', 'Form');

        public function index() {
            $this->set('Researchgroupusermap', $this->Researchgroupusermap->find('all', array(
                'contain' => array('User', 'Researchgroup'),
                'fields' => array('Researchgroupusermap.id', 'User.title_en', 'User.name', 'User.surname', 'Researchgroup.name_en')
            )));
        }

        public function view($id) { 
            $this->loadModel('User');
            $b = $this->User->findById($id); 
            $this->set('b', $b);
    	}

    	public function add() { 
            $this->loadModel('User');
            $users = $this->User->find('list');
            $this->set('user', $users);

            $this->loadModel('Researchgroup');
            $resGroups = $this->Researchgroup->find('list', array(
            'fields' => array('Researchgroup.id', 'Researchgroup.name_en')));
            $this->set('resGroup', $resGroups);

            if ($this->request->is('post')) {
                $this->Researchgroupusermap->create();
                if ($this->Researchgroupusermap->save($this->request->data)) {
                    $this->Session->setFlash('Your Researchgroupusermap has been saved.');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Unable to add your Researchgroupusermap.');
                }
            }
        }

        public function edit($id = null) {
            $this->loadModel('User');
            $users = $this->User->find('list');
            $this->set('user', $users);

            $this->loadModel('Researchgroup');
            $resGroups = $this->Researchgroup->find('list', array(
            'fields' => array('Researchgroup.id', 'Researchgroup.name_en')));
            $this->set('resGroup', $resGroups);
            
            if (!$id) {
                throw new NotFoundException(__('Invalid post'));
            }

            $post = $this->Researchgroupusermap->findById($id);
            if (!$post) {
                throw new NotFoundException(__('Invalid post'));
            }

            if ($this->request->is('post') || $this->request->is('put')) {
                $this->Researchgroupusermap->id = $id;
                if ($this->Researchgroupusermap->save($this->request->data)) {
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

        public function delete($id) {
            if ($this->request->is('get')) {
                throw new MethodNotAllowedException();
            }

            if ($this->Researchgroupusermap->delete($id)) {
                $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
                $this->redirect(array('action' => 'index'));
            }
        }

    }
?>