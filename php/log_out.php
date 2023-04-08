<!-- php\log_out.php -->

<?php

session_start();
session_destroy();
header("Location: ../pages/log_in.html");
