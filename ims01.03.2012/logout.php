<?php
session_start();
include 'databaseconnection.php';
session_destroy();
header('Location:index.php?err=<h3>You have been successfully <b>logout</b> from the Inventory Management System</h3>');

?>