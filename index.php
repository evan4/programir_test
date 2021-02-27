<?php error_reporting( E_ERROR && E_WARNING ); ?>
<?php //error_reporting( E_ALL ); ?>
<?php
session_start([
    'cookie_lifetime' => 86400,
]);

require_once __DIR__.'/bootstrap/init.php';
