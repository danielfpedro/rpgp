<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * MainSideMenu cell
 */
class MainSideMenuCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Categories');
        $categories = $this->Categories->find('all', ['order' => ['name']]);
        $this->set(compact('categories'));
    }
}
