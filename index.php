<?php
/**
 * Created by PhpStorm.
 * User: DaiDV
 * Date: 6/24/2019
 * Time: 6:09 PM
 */

require 'controller/Customer.php';
require 'model/Customer.php';

session_start();

$action = 'index';
$customerController = new \Controller\Customer();
if (isset($_REQUEST['action']) && $_REQUEST['action'] !== '') {
    $action = $_REQUEST['action'];
}

if ($action === 'index') {
    $customerController->index();
} else if ($action === 'add') {
    $customerController->add();
} elseif ($action === 'delete') {
    $customerController->delete();
}