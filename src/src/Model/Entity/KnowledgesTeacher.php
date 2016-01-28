<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * KnowledgesTeacher Entity.
 *
 * @property int $teacher_id
 * @property \App\Model\Entity\Teacher $teacher
 * @property int $knowledge_id
 * @property \App\Model\Entity\Knowledge $knowledge
 * @property int $level
 */
class KnowledgesTeacher extends Entity
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
        'teacher_id' => false,
        'knowledge_id' => false,
    ];
}
