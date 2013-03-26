<?php 
class ResearchgroupController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('researchgroup', $this->Researchgroup->find('all'));
    }

    public function guestview($id) {  
        $this->layout = 'guest';
        if(Configure::read('Config.language') == 'tr') {
            $this->layout = 'guest_tr';
        }

        $this->loadModel('Researchgroup');
        $b = $this->Researchgroup->findById($id); 
        $this->set('b', $b); 
	}
    public function guestlist() {  

               $this->layout = 'guest';
        if(Configure::read('Config.language') == 'tr') {
            $this->layout = 'guest_tr';
        }

        
        $b = $this->Researchgroup->find('all'); 
        $this->set('rs', $b); 
    }


	public function add() { 
        $this->loadModel('Lang');
        $j = $this->Lang->find('list', array(
            'fields' => array('Lang.name')
        ));
        $this->set('lang', $j);


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

    $this->loadModel('Lang');
    $j = $this->Lang->find('list', array(
        'fields' => array('Lang.name')
    ));

    $this->set('lang', $j);

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