<?php
require('../vendor/facebook/graph-sdk/src/Facebook/autoload.php');
require('facebooksession.php');

$helper = $fb->getRedirectLoginHelper();

$permissions = ['']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://sabor12.herokuapp.com/facebook/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';