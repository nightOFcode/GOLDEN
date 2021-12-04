<!DOCTYPE html>
<html lang="en">
<?php
 include 'inc/header.php'
?>
<body>
<?php
include 'inc/sidebar.php'
?>
<nav id="sidebar">
    <a href="index.php" class="holder">
        <i class='bx bxs-home' id="home-icon"></i>
        Home
    </a>
    <a href="Contact.php" class="holder">
        <i class='bx bxs-detail'></i>
        Contact
    </a>
    <div class="holder" id="category-btn">
        <i class='bx bxs-category'></i>
        Categories
    </div>
    <div id="categories">
        <a href="Cars.php" class="list">
            <i class='bx bxs-car'></i>
            Cars
        </a>
        <a href="Nature.php" class="list">
            <i class='bx bxs-tree'></i>
            Nature
        </a>
        <a href="Sea.php" class="list">
            <i class='bx bx-water'></i>
            Sea
        </a>
        <a href="Neon.php" class="list">
            <i class='bx bx-meh-blank'></i>
            Neon
        </a>
        <a href="Text.php" class="list">
            <i class='bx bx-text'></i>
            Text
        </a>
        <a href="Trucks.php" class="list">
            <i class='bx bxs-truck'></i>
            Trucks
        </a>
    </div>
    <a href="Login.php" class="holder">
        <i class='bx bx-log-in'></i>
        Login
    </a>
</nav>
<div id="login-holder">
    <h1>
        Login
    </h1>
    <div id="login-area" class="login">
        <b>Login</b>
        <div id="login-text">
            you have account <br>
            so login in to your account
            from here
        </div>
        <button class="login-button" id="login-button">
            < Login >
        </button>
    </div>
    <div class="login" id="sign-area">
        <b>Sign up</b>
        <div id="sign-text">
            your new in here <br>
            so sign up for free from
            here
        </div>
        <button class="login-button" id="sign-button">
            < Sign up >
        </button>
    </div>
</div>
<div class="center-login">
    <div id="login-content-holder">
        <div id="l-holder">
            <div class="login-input">
                username:
                <div>
                    <input type="text" aria-label="..." id="login-username">
                </div>
            </div>
            <div class="login-input">
                password:
                <div>
                    <input type="text" aria-label="..." id="login-password">
                </div>
            </div>
        </div>
        <div class="content-button-holder">
            <button id="content-login-button" class="login-button">
                << Login >>
            </button>
        </div>
    </div>
</div>
<div class="center-login">
    <div id="sign-content-holder">
        <div id="s-holder">
            <div class="login-input">
                Name:
                <div>
                    <input type="text" aria-label="..." id="sign-name">
                </div>
            </div>
            <div class="login-input">
                email:
                <div>
                    <input type="text" aria-label="..." id="sign-email">
                </div>
            </div>
            <div class="login-input">
                username:
                <div>
                    <input type="text" aria-label="..." id="sign-username">
                </div>
            </div>
            <div class="login-input">
                password:
                <div>
                    <input type="text" aria-label="..." id="sign-password">
                </div>
            </div>
        </div>
        <div class="content-button-holder">
            <button id="content-sign-button" class="login-button">
                << Sign up >>
            </button>
        </div>
    </div>
    <div id="loading-holder">
        <img src="giphy.gif" alt=".." id="loading">
    </div>
</div>
<script src="particle.js"></script>
</body>
</html>
