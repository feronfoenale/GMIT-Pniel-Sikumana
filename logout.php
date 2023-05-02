<?php

require 'config.php';
session_destroy();

header('Location: gate/login.php');

?>