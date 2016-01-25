<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriesPlugins Controller
 *
 * @property \App\Model\Table\CategoriesPluginsTable $CategoriesPlugins
 */
class CategoriesPluginsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Plugins']
        ];
        $this->set('categoriesPlugins', $this->paginate($this->CategoriesPlugins));
        $this->set('_serialize', ['categoriesPlugins']);
    }

    /**
     * View method
     *
     * @param string|null $id Categories Plugin id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriesPlugin = $this->CategoriesPlugins->get($id, [
            'contain' => ['Categories', 'Plugins']
        ]);
        $this->set('categoriesPlugin', $categoriesPlugin);
        $this->set('_serialize', ['categoriesPlugin']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriesPlugin = $this->CategoriesPlugins->newEntity();
        if ($this->request->is('post')) {
            $categoriesPlugin = $this->CategoriesPlugins->patchEntity($categoriesPlugin, $this->request->data);
            if ($this->CategoriesPlugins->save($categoriesPlugin)) {
                $this->Flash->success(__('The categories plugin has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categories plugin could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoriesPlugins->Categories->find('list', ['limit' => 200]);
        $plugins = $this->CategoriesPlugins->Plugins->find('list', ['limit' => 200]);
        $this->set(compact('categoriesPlugin', 'categories', 'plugins'));
        $this->set('_serialize', ['categoriesPlugin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categories Plugin id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriesPlugin = $this->CategoriesPlugins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriesPlugin = $this->CategoriesPlugins->patchEntity($categoriesPlugin, $this->request->data);
            if ($this->CategoriesPlugins->save($categoriesPlugin)) {
                $this->Flash->success(__('The categories plugin has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categories plugin could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoriesPlugins->Categories->find('list', ['limit' => 200]);
        $plugins = $this->CategoriesPlugins->Plugins->find('list', ['limit' => 200]);
        $this->set(compact('categoriesPlugin', 'categories', 'plugins'));
        $this->set('_serialize', ['categoriesPlugin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categories Plugin id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriesPlugin = $this->CategoriesPlugins->get($id);
        if ($this->CategoriesPlugins->delete($categoriesPlugin)) {
            $this->Flash->success(__('The categories plugin has been deleted.'));
        } else {
            $this->Flash->error(__('The categories plugin could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
