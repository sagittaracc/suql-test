<?php

namespace app\models;

use app\records\ActiveRecord;

class Msgs extends ActiveRecord
{
    public function query()
    {
        return 'all_msgs';
    }

    public function table()
    {
        return 'msgs';
    }

    public function fields()
    {
        return [
            'id',
            'msg',
        ];
    }

    public function view()
    {
        return $this->where(['mark' => 0]);
    }
}