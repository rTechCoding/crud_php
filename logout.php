<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page

        echo
"<script>
alert('You are successfully logged out.');
window.location.href = 'login.php';
</script>";

        // header("Location: login.php");
    }
?>