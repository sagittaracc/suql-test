<?php

/**
 * See all the users
 * 
 * @author sagittaracc <sagittaracc@gmail.com>
 */
use app\models\User;
use suql\db\Container;

require 'vendor/autoload.php';

// Connect to the database
Container::create(require __DIR__ . '/app/config/db.php');

$username = 'fayword';
$query = User::all()->where(['username' => $username])->getRole();
$role = $query->fetchAll()[0]['role'];

if ($role !== 'admin') {
    throw new Exception('Access denied!');
}

// Fetch data from the database
$users = User::all()->fetchAll();

print_r($users);