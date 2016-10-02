<?php
/**
 * Creator: Carles Mateo
 * Date: 2015-05-11 11:56
 */

// Report all PHP errors
error_reporting(E_ALL);

$b_debug = false;

if (!isset($_GET['url']) || !isset($_GET['quality'])) {
    echo 'Invalid parameters';
    exit();
}

if (isset($_GET['debug'])) {
    $b_debug = true;
}

$s_url = $_GET['url'];
$s_quality = $_GET['quality'];

// Just in case is not decoded by the PHP installed
$s_url = urldecode($s_url);
// reencode url
$s_url = urlencode($s_url);

$s_script = '/mypath/myapp_commandline.sh';

$s_script_with_params = $s_script.' '.$s_url.' '.$s_quality;

if ($b_debug == true) {
    $s_script_with_params .= ' debug';
    echo 'Executing '.$s_script_with_params."<br />\n";
}

//$message=shell_exec("/var/www/scripts/testscript 2>&1");
$s_message = shell_exec($s_script_with_params);

header("Content-Type: text/plain");
echo $s_message;
