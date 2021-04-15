<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 15/04/2021
 * Time: 13:58
 */

?>
<h1>Ini contoh penggunaan composer</h1>
<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s", Carbon::now());
