<?php
session_start();

session_unset();
session_destroy();

require_once('../functions/index.php');

redirect('/session');
die();
