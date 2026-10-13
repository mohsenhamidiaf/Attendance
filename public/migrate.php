<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
use Illuminate\Support\Facades\Artisan;
Artisan::call('migrate', ['--force' => true]);
echo "Migration done!";

?>

