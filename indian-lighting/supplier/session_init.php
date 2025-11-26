<?php
session_start();

// Optional: Set once using GET if not already set
if (isset($_GET['company']) && !isset($_SESSION['company'])) {
    $_SESSION['company'] = $_GET['company'];
}
?>
