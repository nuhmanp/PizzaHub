<?php
// src/Controller/OrderpizzaController.php

namespace App\Controller;

use App\Controller\AppController;

class OrderpizzaController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $this->set('orderpizza', $this->Orderpizza->find('all'));
    }

    public function view($id)
    {
        $orderpizza = $this->Orderpizza->get($id);
        $this->set(compact('orderpizza'));
    }

    /*public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }*/
		public function add()
	{
		$orderpizza = $this->Orderpizza->newEntity();
		if ($this->request->is('post')) {
			 //$this->Orderpizza->set('toppings', $val);
			 $val = implode(',',$this->request->data['toppings']);
			 
			$orderpizza = $this->Orderpizza->patchEntity($orderpizza, $this->request->data);
		
			

			$orderpizza->set('toppings', $val);
			// Added this line
			//$article->user_id = $this->Auth->user('id');
			// You could also do the following
			//$newData = ['user_id' => $this->Auth->user('id')];
			//$article = $this->Articles->patchEntity($article, $newData);
			
			if ($this->Orderpizza->save($orderpizza)) {
				$this->Flash->success(__('Your orderpizza has been saved.'));
				return $this->redirect(['action' => 'success']);
			}
			$this->Flash->error(__('Unable to add your orderpizza.'));
		}
		$this->set('orderpizza', $orderpizza);
	}
	public function edit($orderid = null)
{
    $orderpizza = $this->Orderpizza->get($orderid);
    if ($this->request->is(['post', 'put'])) {
        $this->Orderpizza->patchEntity($orderpizza, $this->request->data);
        if ($this->Orderpizza->save($orderpizza)) {
            $this->Flash->success(__('Your orderpizza has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your orderpizza.'));
    }

    $this->set('orderpizza', $orderpizza);
}
public function delete($orderid)
{
    $this->request->allowMethod(['post', 'delete']);

    $orderpizza = $this->Orderpizza->get($orderid);
    if ($this->Orderpizza->delete($orderpizza)) {
        $this->Flash->success(__('The orderpizza with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}
public function success()
    {
        //$this->set('orderpizza', $this->Orderpizza->find('all'));
    }
// src/Controller/ArticlesController.php
}

?>