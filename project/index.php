<?php

require('./functions.php');

$model = 'Hello World';

$view_bag = [];

$view_bag['title'] = 'Here is the title';

view('index', $model);
