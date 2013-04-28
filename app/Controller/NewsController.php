<?php
    class NewsController extends AppController { 
        public $helpers = array('Html', 'Form','Session');

        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow('guestlist','guestview');
        }
    	public function index($type) {
    		$this->set('posts', $this->News->find('all', array(
                        'fields' => array('News.id','News.title_en','News.title_tr','News.expiredate'),
                        'conditions' => array('News.type' => $type))));
            $this->set('type', $type);
    	}

        public function guestlist() {  
            $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto

           $result = Cache::read('news_guestlist', 'long');
            if (!$result) {
                $result = $this->News->find('all',
             array('conditions' =>  array ( 'News.type' => 'news', 'News.expiredate <' => date("Y-m-d"))
                )
             );   
                Cache::write('news_guestlist', $result, 'long');
            }  
             
            $this->set('rs', $result); 
        }

        public function guestview($id) {
            $this->layout = 'guest_'.Configure::read('Config.language');    // ziyaretçinin dile göre layout sayfası seçilecek oto

            $j = $this->News->findById($id); 
            $this->set('j', $j); 
        }

    	public function add($type) {
            $this->set('type', $type);
            if ($this->request->is('post')) {
                $this->News->create();

                if ($this->News->save($this->request->data)) {
                    $this->Session->setFlash('Your post has been saved.');
                    $this->redirect(array('action' => 'index/'.$type));
                } else {
                    $this->Session->setFlash('Unable to add your post.');
                }
            }
        }

        public function edit($id = null, $type) {
            $this->set('type', $type);
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
                    $this->redirect(array('action' => 'index/'.$type));
                } else {
                    $this->Session->setFlash('Unable to update your post.');
                }
            }

            if (!$this->request->data) {
                $this->request->data = $post;
            }
        }

        public function delete($id, $type) {
    	    if ($this->request->is('get')) {
    	        throw new MethodNotAllowedException();
    	    }

    	    if ($this->News->delete($id)) {
    	        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
    	        $this->redirect(array('action' => 'index/'.$type));
    	    }
    	}

    }
?>