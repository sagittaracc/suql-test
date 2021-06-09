<?php

namespace app\models;

use app\records\ActiveRecord;

class Role extends ActiveRecord
{
    public function table()
    {
        return 'roles';
    }

    public function fields()
    {
        return [
            ['name' => 'role'],
        ];
    }
}