<?php
require('../constants/cons.php');

session_start();
$fb = new Facebook\Facebook([
  'app_id' => $APP_KEY, // Replace {app-id} with your app id
  'app_secret' => $SECRET_KEY,
  'default_graph_version' => 'v3.2',
  ]);
