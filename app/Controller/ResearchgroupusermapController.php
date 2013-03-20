<?php 
class ResearchgroupusermapController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('Researchgroupusermap', $this->Researchgroupusermap->find('all'));
    }

    public function view($id) { 

        $b = $this->Researchgroupusermap->findById($id); 
        $this->set('b', $b);

	}

	 public function add() { 


  
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