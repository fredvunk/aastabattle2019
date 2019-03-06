<?php

include('../phphtml/home.html');

// check to see if the user is logged in
if ($_SESSION['loggedin']) {
    // user is logged in
    echo 'Tere tulemast ' . $_SESSION['username'] . '!';
} else {
    // user is not logged in, send the user to the login page
    header('Location: index.php');
}


//echo file_get_contents('html.html');
<textarea><?=file_get_contents('html.html')></textarea>


?>