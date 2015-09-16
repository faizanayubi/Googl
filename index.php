<?php

// initialize Googl
include("Googl.php");

$googl = new Googl();

$data = $googl->analyticsFULL('http://goo.gl/abnqlR');
echo "<pre>", print_r($data), "</pre>";
