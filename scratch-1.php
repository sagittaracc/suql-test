<?php

/**
 * Gettting user's role
 * 
 * @author sagittaracc <sagittaracc@gmail.com>
 */
use app\models\User;
use suql\db\Container;

require 'vendor/autoload.php';

// Connect to the database
Container::create(require __DIR__ . '/app/config/db.php');

// Fetch data from the database
$username = '1nterFucker';
$user = User::all()->where(['username' => $username])->getRole()->fetchAll();
$role = $user[0]['role'];

echo "User's role: $role\n";