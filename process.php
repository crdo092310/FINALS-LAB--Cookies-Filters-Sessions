<?php

session_start();


$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 30 days

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $_SESSION['name'] = $name; 
}

if(isset($_COOKIE[$cookie_name])) {
    echo "<p>Cookie Value: " . $_COOKIE[$cookie_name] . "</p>";
}

  
if(isset($_SESSION['name'])) {
    echo "<p>Hello, " . $_SESSION['name'] . "!</p>";
}
?>