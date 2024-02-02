<?php 
session_start();
session_destroy();
header("Location: http://localhost/bdpit2/login.php");