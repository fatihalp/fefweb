<?php
class NewsController extends AppController {
	public $helpers = array('Html', 'Form');
	public function index() {
		$this->set('posts', $this->News->find('all'));
	}


	 public function add() {
        if ($this->request->is('post')) {
            $this->News->create();
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }



    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->News->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is('post') || $this->request->is('put')) {
        $this->News->id = $id;
        if ($this->News->save($this->request->data)) {
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

	    if ($this->News->delete($id)) {
	        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}




}
 
    
?>