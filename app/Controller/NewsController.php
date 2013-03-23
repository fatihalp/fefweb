<?php
class NewsController extends AppController {
	public $helpers = array('Html', 'Form');
	public function index() {
		$this->set('posts', $this->News->find('all'));
	}
   public function guestlist() {  
         $this->layout = 'guest';
        $j = $this->News->find('all'); 
        $this->set('rs', $j); 
    }
    public function guestview($id) {  
         $this->layout = 'guest';
        $j = $this->News->findById($id); 
        $this->set('j', $j); 
    }

	 public function add() {
        
$this->loadModel('Lang');
    $j = $this->Lang->find('list', array(
        'fields' => array('Lang.name')
    ));

    $this->set('lang', $j);

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
   
$this->loadModel('Lang');
    $j = $this->Lang->find('list', array(
        'fields' => array('Lang.name')
    ));

    $this->set('lang', $j);
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