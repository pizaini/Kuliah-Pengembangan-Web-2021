<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 28/05/2021
 * Time: 10:57
 */

use Casbin\Enforcer;

require_once 'vendor/autoload.php';

$enforcer = new Enforcer('rbac_model.conf', 'rbac_data.csv');

$user = 'manager';

if($enforcer->enforce($user, '/url1.php', 'POST')){
    echo 'OK';
}else{
    echo 'FALSE';
}