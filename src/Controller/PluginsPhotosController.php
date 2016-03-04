<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Collection\Collection;

/**
 * PluginsPhotos Controller
 *
 * @property \App\Model\Table\PluginsPhotosTable $PluginsPhotos
 */
class PluginsPhotosController extends AppController
{
    public function getPhotos()
    {
        $photos = $this->PluginsPhotos->find('all', ['plugin_id' => 1]);

        $this->set(compact('photos'));
        $this->set('_serialize', ['photos']);
    }

    public function upload()
    {
        $response = [];
        foreach ($this->request->data('files') as $file) {
            $pluginsPhoto = $this->PluginsPhotos->newEntity(['name' => $file['name'], 'plugin_id' => 1]);
            $this->PluginsPhotos->save($pluginsPhoto);

            $folderDest = new Folder(WWW_ROOT . 'files/plugins/photos/d/');
            $fileTemp = new File($file['tmp_name'], true, 0644);
            $fileTemp->copy($folderDest->path . $file['name']);

            $response[] = $folderDest->path . $file['name'];
        }

        $this->set(compact('response'));
        $this->set('_serialize', ['response']);
        echo json_encode($response);
        $this->autoRender = false;
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Plugins']
        ];
        $pluginsPhotos = $this->paginate($this->PluginsPhotos);

        $this->set(compact('pluginsPhotos'));
        $this->set('_serialize', ['pluginsPhotos']);
    }

    /**
     * View method
     *
     * @param string|null $id Plugins Photo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pluginsPhoto = $this->PluginsPhotos->get($id, [
            'contain' => ['Plugins']
        ]);

        $this->set('pluginsPhoto', $pluginsPhoto);
        $this->set('_serialize', ['pluginsPhoto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pluginsPhoto = $this->PluginsPhotos->newEntity();
        if ($this->request->is('post')) {
            $pluginsPhoto = $this->PluginsPhotos->patchEntity($pluginsPhoto, $this->request->data);
            if ($this->PluginsPhotos->save($pluginsPhoto)) {
                $this->Flash->success(__('The plugins photo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plugins photo could not be saved. Please, try again.'));
            }
        }
        $plugins = $this->PluginsPhotos->Plugins->find('list', ['limit' => 200]);
        $this->set(compact('pluginsPhoto', 'plugins'));
        $this->set('_serialize', ['pluginsPhoto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Plugins Photo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pluginsPhoto = $this->PluginsPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pluginsPhoto = $this->PluginsPhotos->patchEntity($pluginsPhoto, $this->request->data);
            if ($this->PluginsPhotos->save($pluginsPhoto)) {
                $this->Flash->success(__('The plugins photo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The plugins photo could not be saved. Please, try again.'));
            }
        }
        $plugins = $this->PluginsPhotos->Plugins->find('list', ['limit' => 200]);
        $this->set(compact('pluginsPhoto', 'plugins'));
        $this->set('_serialize', ['pluginsPhoto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Plugins Photo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pluginsPhoto = $this->PluginsPhotos->get($id);
        if ($this->PluginsPhotos->delete($pluginsPhoto)) {
            $this->Flash->success(__('The plugins photo has been deleted.'));
        } else {
            $this->Flash->error(__('The plugins photo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
