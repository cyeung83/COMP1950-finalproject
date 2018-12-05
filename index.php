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
                <h2>Outline</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="myButton"><a href="outline.php">Learn more</a></button>
            </article>

            <article>
                <h2>Schedule</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="myButton"><a href="schedule.php">Learn more</a></button>
            </article>

            <article>
                <h2>Lessons</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="myButton"><a href="lessons.php">Learn more</a></button>
            </article>

            </div>
        </main>

        <?php include "./templates/footer.php"?>

    </div>
    <?php include "./templates/scripts.php"?>
</body>
</html>