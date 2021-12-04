<!DOCTYPE html>
<html lang="en">
<?php
 include 'inc/header.php'
?>
<body>
<?php
include 'inc/navbar.php'
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
<div id="loading-holder">
    <img src="giphy.gif" alt=".." id="loading">
</div>
<div id="home-list-holder">
    <a href="Login.php">
        <div id="list-login" class="home-list">
            <b>
                Login
            </b>
        </div>
    </a>
    <a href="Contact.php">
        <div id="list-contact" class="home-list">
            <b>
                Contact
            </b>
        </div>
    </a>
    <div id="list-categories" class="home-list">
        <div>
            <b>
                Categories
            </b>
        </div>
    </div>
</div>
<div id="home-category-list-holder">
    <a href="Cars.php" class="category-list-holder">
        <div>
            <i class='bx bxs-car'></i>
        </div>
    </a>
    <a href="Nature.php" class="category-list-holder">
        <div>
            <i class='bx bxs-tree'></i>
        </div>
    </a>
    <a href="Neon.php" class="category-list-holder">
        <div>
            <i class='bx bx-meh-blank'></i>
        </div>
    </a>
    <a href="Sea.php" class="category-list-holder">
        <div>
            <i class='bx bx-water'></i>
        </div>
    </a>
    <a href="Text.php" class="category-list-holder">
        <div>
            <i class='bx bx-text'></i>
        </div>
    </a>
    <a href="Trucks.php" class="category-list-holder">
        <div>
            <i class='bx bxs-truck'></i>
        </div>
    </a>
</div>
<script src="particle.js"></script>
</body>
</html>