<?php
    session_start();
    error_reporting(0);

    include_once('../config/global.php');
    include_once('../config/dbconnection.php');

    $title = "Rutas - " . SITE_TITLE;

    // Checks if there is a currently authenticated user, if not redirects to login
    if (strlen($_SESSION['tmsc_id'] == 0)):
        header('location:logout.php');
    else:
?>

<?php include_once('includes/header.php');?>

<div>
<div class="admin_background"></div>
<div class="container">
    
</div>
</div>

<?php endif; ?>