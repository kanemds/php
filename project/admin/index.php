<?php

session_start();
// store all the require files
require('../app/app.php');
ensure_user_is_authenticated();



view('admin/index', get_terms());
