<!doctype html>
<html lang="en">

<?php
    $pageName = "Home"; 
    include "./templates/head.php" 
?>

<body>
    <div class="wrapper">

        <?php include "./templates/header.php"?>
        
        <main>
            <div class="banner-image">
                <img src="images/index/computerhand-medium.jpeg" alt="laptop on desk">
                <h2>COMP 1950</h2>
            </div>

            <div class="mainpagearticles">

            <article>
                <h2><a href="#0">Outline</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="outline.php"><button class="myButton">Learn more</button><a>
            </article>

            <article>
                <h2><a href="collection.html">Schedule</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="schedule.php"><button class="myButton">Learn more</button></a>
            </article>

            <article>
                <h2><a href="#0">Lessons</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="lessons.php"><button class="myButton">Learn more</button></a>
            </article>

            </div>
        </main>

        <?php include "./templates/footer.php"?>

    </div>
</body>
<?php include "./templates/scripts.php"?>
</html>