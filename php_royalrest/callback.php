<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Load .env */
$envPath = __DIR__ . '/.env';

if (!file_exists($envPath)) {
    die(".env file not found!");
}

$env = parse_ini_file($envPath);

$client_id = $env['GOOGLE_CLIENT_ID'];
$client_secret = $env['GOOGLE_CLIENT_SECRET'];
$redirect_uri = $env['GOOGLE_REDIRECT_URI'];

if (!isset($_GET['code'])) {
    die("Authorization code not received.");
}

$code = $_GET['code'];

/* Exchange code for access token */
$token_url = "https://oauth2.googleapis.com/token";

$post_fields = [
    'code' => $code,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'grant_type' => 'authorization_code'
];

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));

$response = curl_exec($ch);
curl_close($ch);

$token_data = json_decode($response, true);

if (!isset($token_data['access_token'])) {
    die("Error fetching access token.");
}

$access_token = $token_data['access_token'];

/* Get user info */
$user_info_url = "https://www.googleapis.com/oauth2/v2/userinfo";

$ch = curl_init($user_info_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . $access_token
]);

$user_response = curl_exec($ch);
curl_close($ch);

$user = json_decode($user_response, true);

if (!isset($user['email'])) {
    die("Error fetching user info.");
}

$_SESSION['user_name'] = $user['name'];
$_SESSION['user_email'] = $user['email'];

echo "<h2>Login Successful</h2>";
echo "Name: " . htmlspecialchars($_SESSION['user_name']) . "<br>";
echo "Email: " . htmlspecialchars($_SESSION['user_email']);
