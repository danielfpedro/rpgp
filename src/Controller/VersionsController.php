<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Versions Controller
 *
 * @property \App\Model\Table\VersionsTable $Versions
 */
class VersionsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index($id = null)
    {
        $plugin = $this->Versions->Plugins->get($id, ['contain' => ['Users']]);

        $this->paginate = [
            'conditions' => [
                'plugin_id' => $id
            ]
        ];
        $this->set('versions', $this->paginate($this->Versions));
        $this->set(compact('plugin'));
    }

    /**
     * View method
     *
     * @param string|null $id Version id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => ['Plugins']
        ]);
        $this->set('version', $version);
        $this->set('_serialize', ['version']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $this->viewBuilder()->template('form');

        $version = $this->Versions->newEntity();
        $version->plugin_id = $id;

        if ($this->request->is('post')) {
            $version = $this->Versions->patchEntity($version, $this->request->data);
            if ($this->Versions->save($version)) {
                $this->Flash->success(__('The version has been saved.'));

                $plugin = $this->Versions->Plugins->get($id);

                return $this->redirect(['controller' => 'Plugins', 'action' => 'view', $plugin->namespace]);
            } else {
                $this->Flash->error(__('The version could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('version'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Version id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null, $plugin_id = null)
    {
        $this->viewBuilder()->template('form');

        $version = $this->Versions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $version = $this->Versions->patchEntity($version, $this->request->data);
            if ($this->Versions->save($version)) {
                $this->Flash->success(__('The version has been saved.'));
                return $this->redirect(['controller' => 'Versions', 'action' => 'index', $plugin_id]);
            } else {
                $this->Flash->error(__('The version could not be saved. Please, try again.'));
            }
        }
        $plugins = $this->Versions->Plugins->find('list', ['limit' => 200]);
        $this->set(compact('version', 'plugins'));
        $this->set('_serialize', ['version']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Version id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $version = $this->Versions->get($id);
        if ($this->Versions->delete($version)) {
            $this->Flash->success(__('The version has been deleted.'));
        } else {
            $this->Flash->error(__('The version could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
