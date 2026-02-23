<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Load .env file */
$envPath = __DIR__. '/.env';



$env = parse_ini_file($envPath);



$client_id = $env['GOOGLE_CLIENT_ID'] ?? null;
$redirect_uri = $env['GOOGLE_REDIRECT_URI'] ?? null;



/* Build Google Authorization URL */
$auth_url = "https://accounts.google.com/o/oauth2/v2/auth?" . http_build_query([
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'response_type' => 'code',
    'scope' => 'email profile',
    'access_type' => 'offline',
    'prompt' => 'consent'
]);

header("Location".$auth_url);
?>


