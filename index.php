<?php
/**
 * Created by PhpStorm.
 * User: DaiDV
 * Date: 6/24/2019
 * Time: 6:09 PM
 */

require 'controller/Customer.php';
require 'model/Customer.php';

$action = 'index';
if (isset($_REQUEST['action']) && $_REQUEST['action'] !== '') {
    $action = $_REQUEST['action'];
}

if ($action === 'add') {
    include 'view/customer/add.php';
}