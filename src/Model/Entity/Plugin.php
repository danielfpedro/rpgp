<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plugin Entity.
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $author_id
 * @property \App\Model\Entity\Author $author
 * @property string $description
 * @property string $namespace
 * @property \App\Model\Entity\Version[] $versions
 * @property \App\Model\Entity\Category[] $categories
 */
class Plugin extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    protected function _getTagsArray()
    {
        return explode(',', $this->_properties['tags']);
    }
}
