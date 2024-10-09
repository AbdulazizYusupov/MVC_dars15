<?php 

use App\App;

include "autoload.php";
include "web.php";

$app = new App();
echo $app->run();