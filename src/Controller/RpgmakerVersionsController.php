<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RpgmakerVersions Controller
 *
 * @property \App\Model\Table\RpgmakerVersionsTable $RpgmakerVersions
 */
class RpgmakerVersionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $rpgmakerVersions = $this->paginate($this->RpgmakerVersions);

        $this->set(compact('rpgmakerVersions'));
        $this->set('_serialize', ['rpgmakerVersions']);
    }

    /**
     * View method
     *
     * @param string|null $id Rpgmaker Version id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rpgmakerVersion = $this->RpgmakerVersions->get($id, [
            'contain' => ['Plugins']
        ]);

        $this->set('rpgmakerVersion', $rpgmakerVersion);
        $this->set('_serialize', ['rpgmakerVersion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rpgmakerVersion = $this->RpgmakerVersions->newEntity();
        if ($this->request->is('post')) {
            $rpgmakerVersion = $this->RpgmakerVersions->patchEntity($rpgmakerVersion, $this->request->data);
            if ($this->RpgmakerVersions->save($rpgmakerVersion)) {
                $this->Flash->success(__('The rpgmaker version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rpgmaker version could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('rpgmakerVersion'));
        $this->set('_serialize', ['rpgmakerVersion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rpgmaker Version id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rpgmakerVersion = $this->RpgmakerVersions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rpgmakerVersion = $this->RpgmakerVersions->patchEntity($rpgmakerVersion, $this->request->data);
            if ($this->RpgmakerVersions->save($rpgmakerVersion)) {
                $this->Flash->success(__('The rpgmaker version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rpgmaker version could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('rpgmakerVersion'));
        $this->set('_serialize', ['rpgmakerVersion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rpgmaker Version id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rpgmakerVersion = $this->RpgmakerVersions->get($id);
        if ($this->RpgmakerVersions->delete($rpgmakerVersion)) {
            $this->Flash->success(__('The rpgmaker version has been deleted.'));
        } else {
            $this->Flash->error(__('The rpgmaker version could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
