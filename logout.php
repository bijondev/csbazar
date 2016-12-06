<?php
include 'CSAdmin/config.php';
session_destroy();
header('location: '.baseurl);
?>