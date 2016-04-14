<?php

namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;


class SiteController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    public function home()
    {
    	$this->loadModel('Plugins');
    	$plugins = $this->Plugins->find('all', ['contain' => ['Users', 'RpgmakerVersions']]);
    	$this->set(compact('plugins'));
    }
}
