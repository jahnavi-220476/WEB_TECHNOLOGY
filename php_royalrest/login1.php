<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

    <h2>Login Form</h2>

    <form action="login.php" method="post">
        
        Email:
        <input type="email" name="email" required>
        <br><br>

        Password:
        <input type="password" name="password" required>
        <br><br>

        <input type="submit" value="Login">

    </form>



<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


$envPath = __DIR__ . '/.env';

if (!file_exists($envPath)) {
    die(".env file not found!");
}

$env = parse_ini_file($envPath);

if (!$env) {
    die("Error reading .env file!");
}

$client_id = $env['GOOGLE_CLIENT_ID'] ?? null;
$redirect_uri = $env['GOOGLE_REDIRECT_URI'] ?? null;

if (!$client_id || !$redirect_uri) {
    die("Missing environment variables!");
}


$auth_url = "https://accounts.google.com/o/oauth2/v2/auth?" . http_build_query([
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'response_type' => 'code',
    'scope' => 'email profile',
    'access_type' => 'offline',
    'prompt' => 'consent'
]);

header("Location".$auth_url)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Google OAuth Login</title>
</head>
<body>

<h2>Login Using Google</h2>

<a href="<?php echo htmlspecialchars($auth_url); ?>">
    Login with Google
</a>

</body>
</html>





