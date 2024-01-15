<?php
require_once 'vendor/autoload.php'; 

$fb = new \Facebook\Facebook([
    'app_id' => '757936839722305',
    'app_secret' => '3b04f35691d0d623c1ae9b6c45198184',
    'default_graph_version' => 'v18.0',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('https://www.ejemplo.com/auth/facebook/callback', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">
<button class="login">Login</button>
</a>';

$helper = $fb->getRedirectLoginHelper();

try {
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exception\ResponseException $e) {
    echo 'Error: ' . $e->getMessage();
    exit;
} ?>