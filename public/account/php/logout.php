<?php
ob_start();
require("db.php");
session_start();
session_destroy();
header("location: ../");
?>