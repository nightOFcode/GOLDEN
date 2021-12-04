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
    <ul>
        <li class="holder">
            <a href="index.php">
                <i class='bx bxs-home' id="home-icon"></i>
                Home
            </a>
        </li>
        <li class="holder">
            <a href="Contact.php">
                <i class='bx bxs-detail'></i>
                Contact
            </a>
        </li>
        <li class="holder" id="category-btn">
            <i class='bx bxs-category'></i>
            Categories
        </li>
        <li>
            <div>
                <ul id="categories">
                    <li class="list">
                        <a href="Cars.php">
                            <i class='bx bxs-car'></i>
                            Cars
                        </a>
                    </li>
                    <li class="list">
                        <a href="Nature.php">
                            <i class='bx bxs-tree'></i>
                            Nature
                        </a>
                    </li>
                    <li class="list">
                        <a href="Sea.php">
                            <i class='bx bx-water'></i>
                            Sea
                        </a>
                    </li>
                    <li class="list">
                        <a href="Neon.php">
                            <i class='bx bx-meh-blank'></i>
                            Neon
                        </a>
                    </li>
                    <li class="list">
                        <a href="Text.php">
                            <i class='bx bx-text'></i>
                            Text
                        </a>
                    </li>
                    <li class="list">
                        <a href="Trucks.php">
                            <i class='bx bxs-truck'></i>
                            Trucks
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="holder" id="login">
            <a href="Login.php">
                <i class='bx bx-log-in'></i>
                Login
            </a>
        </li>
    </ul>
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
<script src="particle.js"></script>
</body>
</html>
