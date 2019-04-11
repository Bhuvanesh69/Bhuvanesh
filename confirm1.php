<?php
session_start();
header( 'Location: https://www.w3schools.com/'.$_SESSION['course'] ) ; 
session_destroy();
?>