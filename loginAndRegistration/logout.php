<?php

include_once '../phpDependencies/config.php';
session_unset();
session_destroy();
session_start();
header('location:../home/index.php');

?>
