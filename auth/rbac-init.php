<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/05/2021
 * Time: 10:47
 */

use Casbin\Enforcer;

require_once 'vendor/autoload.php';

$enforce = new Enforcer('rbac_model.conf', 'rbac_data.csv');

/*
 * 2 ROLES: CUstomer dan manager
 */
$enforce->addRoleForUser('user1', 'customer');
$enforce->addRoleForUser('user2', 'manager');
/*
 * Permission customer
 */
$enforce->addPermissionForUser('customer', '/url1.php', 'GET');

/*
 * Permission manager
 */
$enforce->addPermissionForUser('manager', '/url1.php', 'POST');
$enforce->addPermissionForUser('manager', '/url2.php', 'GET');
/*
 * save
 */
$enforce->savePolicy();

echo 'Policy saved';