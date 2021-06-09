<?php

/**
 * Mark admin's messages
 * 
 * @author sagittaracc <sagittaracc@gmail.com>
 */
use app\models\Msgs;
use suql\db\Container;

require 'vendor/autoload.php';

// Connect to the database
Container::create(require __DIR__ . '/app/config/db.php');

// Fetch data from the database
$msgs = Msgs::all()->getRole(['algorithm' => 'smart'])->fetchAll();

foreach ($msgs as &$msg) {
    if ($msg['role'] === 'admin') {
        $msg['from_admin'] = true;
    }

    unset($msg['role']);
}
unset($msg);

print_r($msgs);