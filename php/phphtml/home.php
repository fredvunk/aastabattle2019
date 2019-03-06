<?php

include('../phphtml/home.html');

// check to see if the user is logged in
if ($_SESSION['loggedin']) {
    // user is logged in
    echo 'Teretulemast ' . $_SESSION['username'] . '!';
} else {
    // user is not logged in, send the user to the login page
    header('Location: index.php');
}
?>