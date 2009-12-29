<?php

define('ASSET_CSS', 100);
define('ASSET_JS', 100);
define('ASSET_SWF', 100);
define('ASSET_IMG', 100);

if (!@include('bootstrap.local.php')) 
{
    define('CAKE_CORE_INCLUDE_PATH', '/var/www/cake');
}

?>