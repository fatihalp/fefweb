<?php 
class ResearchgroupController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('researchgroup', $this->Researchgroup->find('all', array(
                    'fields' => array('Researchgroup.id','Researchgroup.name_en','Researchgroup.name_tr'))));
    }

    public function guestview($id) {  
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto
 
        $this->loadModel('Researchgroup');
        $b = $this->Researchgroup->findById($id); 
        $this->set('b', $b); 
	}

    public function guestlist() {  
        $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto

        $b = $this->Researchgroup->find('all',
         array('conditions' =>  array ( 'Researchgroup.langid' => Configure::read('Config.language')  )
            )
         ); 
        $this->set('rs', $b); 
    }

	public function add() {
        if ($this->request->is('post')) {
            $this->Researchgroup->create();
            if ($this->Researchgroup->save($this->request->data)) {
                $this->Session->setFlash('Your Researchgroup has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Researchgroup.');
            }
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Researchgroup->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Researchgroup->id = $id;
            if ($this->Researchgroup->save($this->request->data)) {
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

        if ($this->Researchgroup->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}