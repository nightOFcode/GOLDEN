<!DOCTYPE html>
<html lang="en">

<?php
include 'inc/header.php';
?>

<body>

<?php
include 'inc/navbar.php';
include 'inc/sidebar.php';
?>

<div id="head-text">
    <h1>
        Home
    </h1>
    <p>
        <b>HELLO</b>
        <br>
        Welcome to our site,
        <br>
        in here we try to show best wallpapers existed in the world,
        <br>
        so feel free to surf and explore our site and tel your opinions in the comment section,
        <br>
        we use your opinions to improve our site.
    </p>
</div>
<div id="contact-holder">
    <h1>
        Contact Us
    </h1>
    <div>
        <div class="contact-input">
            Name:
            <div>
                <input type="text" aria-label="..." placeholder="Name..">
            </div>
        </div>
        <div class="contact-input">
            Email:
            <div>
                <input type="email" aria-label="..." placeholder="Email">
            </div>
        </div>
        <div id="content-message">
            Message:
            <div>
                <textarea id="message" aria-label="..." placeholder="&nbsp;message..."></textarea>
            </div>
            <button class="login-button" id="send-button">
                Send
            </button>
        </div>
    </div>
</div>
<div id="loading-holder">
    <img src="giphy.gif" alt=".." id="loading">
</div>
<script src="particle.js"></script>
</body>
</html>