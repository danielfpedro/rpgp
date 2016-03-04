<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Plugins Controller
 *
 * @property \App\Model\Table\PluginsTable $Plugins
 */
class PluginsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['search', 'view']);
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Authors']
        ];
        $this->set('plugins', $this->paginate($this->Plugins));
        $this->set('_serialize', ['plugins']);
    }

    public function view($namespace = null)
    {
        $plugin = $this->Plugins->find('all', [
            'contain' => ['Users', 'PluginsPhotos'],
            'conditions' => ['namespace' => $namespace]
        ])->first();

        $lastestVersion = $this->Plugins->getLatestVersion($plugin);

        $this->set(compact('plugin', 'lastestVersion'));
    }

    public function photosSettings($namespace = null)
    {
        $plugin = $this->Plugins->find('all', [
            'contain' => ['Users', 'PluginsPhotos'],
            'conditions' => ['namespace' => $namespace]
        ])->first();

        $this->set(compact('plugin'));
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->template('form');

        $plugin = $this->Plugins->newEntity();
        if ($this->request->is('post')) {
            
            $this->request->data['user_id'] = $this->Auth->user();

            $plugin = $this->Plugins->patchEntity($plugin, $this->request->data);
            if ($this->Plugins->save($plugin)) {
                $this->Flash->success(__('The plugin has been saved.'));
                return $this->redirect(['controller' => 'Users', 'action' => 'view', $this->Auth->user('username')]);
            } else {
                $this->Flash->error(__('The plugin could not be saved. Please, try again.'));
            }
        }

        $categories = $this->Plugins->Categories->find('list', ['limit' => 200]);
        $this->set(compact('plugin', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Plugin id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->template('form');

        $plugin = $this->Plugins->get($id, [
            'contain' => ['Categories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plugin = $this->Plugins->patchEntity($plugin, $this->request->data);
            if ($this->Plugins->save($plugin)) {
                $this->Flash->success(__('The plugin has been saved.'));
                return $this->redirect(['controller' => 'Plugins', 'action' => 'view', $plugin->namespace]);
            } else {
                $this->Flash->error(__('The plugin could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Plugins->Categories->find('list', ['limit' => 200]);
        $this->set(compact('plugin', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Plugin id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $plugin = $this->Plugins->get($id);
        if ($this->Plugins->delete($plugin)) {
            $this->Flash->success(__('The plugin has been deleted.'));
        } else {
            $this->Flash->error(__('The plugin could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function search()
    {
        $q = str_replace(' ', '%', $this->request->query('q'));

        $plugins = $this->Plugins->find('all', [
            'contain' => 'Users',
            'conditions' => [
                'or' => [
                    'Plugins.name LIKE' => '%'.$q.'%',
                    'Plugins.tags LIKE' => '%'.$q.'%'
                ]
            ]
        ]);

        $this->set(compact('plugins'));
    }
}
