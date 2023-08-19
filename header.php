<?php
session_start();

if ($_SESSION["status_login"] != true) {
    header("Location:index.php");
}