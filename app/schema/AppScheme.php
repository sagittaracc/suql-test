<?php

namespace app\schema;

use suql\core\Scheme;

class AppScheme extends Scheme
{
    function __construct()
    {
        $this->addTableList([
            'users' => 'u',
            'roles' => 'r',
            'msgs'  => 'm',
        ]);

        $this->rel('{{u}}', '{{r}}', '{{u}}.role_id = {{r}}.id');
        $this->rel('{{u}}', '{{m}}', '{{u}}.id = {{m}}.user_id');
    }
}