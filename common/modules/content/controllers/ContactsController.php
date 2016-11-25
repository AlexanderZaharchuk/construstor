<?php

namespace common\modules\content\controllers;

use common\modules\content\models\Contacts;

class ContactsController extends CrudController
{
    /**
     * @var array
     */
    public $allow = [
        'index',
        'update',
    ];

    /**
     * @return Contacts
     */
    public function getModel()
    {
        return new Contacts();
    }
}
