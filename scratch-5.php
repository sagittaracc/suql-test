<?php

/**
 * See all the marked messages
 * !FOR ADMINS ONLY!
 */
use app\models\MarkedMsgs;
use app\models\User;
use suql\db\Container;

require 'vendor/autoload.php';

// Connect to the database
Container::create(require __DIR__ . '/app/config/db.php');

$username = 'mario';
$user = User::all()->where(['username' => $username])->getRole()->fetchAll()[0];

if ($user['role'] !== 'admin') {
    throw new Exception('Access denied!');
}

// Fetch data from the database
$msgs = MarkedMsgs::all()->fetchAll();

print_r($msgs);