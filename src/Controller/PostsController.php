<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController{

  public function initialize(){
    parent::initialize();

    $this->loadComponent('Flash'); // Include the FlashComponent
  }

  public function index() {
    $posts = $this->Posts->find('all');
    $this->set(compact('posts'));
  }

  public function view($id = null) {
    $posts = $this->Posts->get($id);
    $this->set('posts', $posts);
  }

  public function  add(){
    $posts = $this->Posts->newEntity();

    if($this->request->is('post')) {
      $posts = $this->Posts->patchEntity($posts, $this->request->data);

      if($this->Posts->save($posts)){
        $this->Flash->success('Success!');
        return $this->redirect(array('action' => 'index'));

      } else {
        $this->Flash->error('failed!');
      }
    }
    $this->set('posts', $posts);
  }

  public function edit($id = null){

    $posts = $this->Posts->get($id);

    if($this->request->is(['post', 'put'])){
      $this->Posts->patchEntity($posts, $this->request->data);
      if ($this->Posts->save($posts)){
        $this->Flash->success('Success!!');
        return $this->redirect(['action' => 'index']);

     }
        $this->Flash->error('failed!');
    }
    $this->set('posts', $posts);

  }

  public function delete($id){
    $this->request->allowMethod(['post', 'delete']);
    $posts = $this->Posts->get($id);

    if($this->Posts->delete($posts)){
      $this->Flash->success('Deleted id:{0}',h($id));
      return $this->redirect(['action' => 'index']);
    }
  }

}
?>
