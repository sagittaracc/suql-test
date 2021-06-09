<?php

/**
 * Read all the messages
 * 
 * @author sagittaracc <sagittaracc@gmail.com>
 */
use app\models\Msgs;
use app\models\User;
use suql\db\Container;

require 'vendor/autoload.php';

// Connect to the database
Container::create(require __DIR__ . '/app/config/db.php');

// Fetch data from the database
$data = Msgs::all()->fetchAll();

print_r($data);

$username = '1nterFucker';

$user = User::all()->where(['username' => $username])->getRole()->fetchAll();
$role = $user[0]['role'];

if ($role === 'guest') {
    echo "You can't post a message here!\n";
}