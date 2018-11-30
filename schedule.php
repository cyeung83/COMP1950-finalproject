<!doctype html>
<html lang="en">

    <?php
        $pageName = "Schedule"; 
        include "./templates/head.php" 
    ?>

    <body>
        <div class="wrapper">
            
            <?php include "./templates/header.php"?>

            <main>
                <section class="schedule-content">
                    <h1>Course Schedule</h1>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Sep 11</h3>
                            </div>
                            <h2 class="class-title">Day 01</h2>

                            <ul class="class-itinerary">
                                <li>Course Introduction</li>
                                <li>Setup development environment</li>
                                <li>FTP Setup</li>
                                <li>HTML and CSS Review</li>
                                <li>HTML5 Video and Audio</li>
                                <li>Assignment 1</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Sep 18</h3>
                            </div>
                            <h2 class="class-title">Day 02</h2>

                            <ul class="class-itinerary">
                                <li>CSS @font-face</li>
                                <li>Responsive web design</li>
                                <li>Assignment 2</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Sep 25</h3>
                            </div>
                            <h2 class="class-title">Day 03</h2>

                            <ul class="class-itinerary">
                                <li>Flexbox</li>
                                <li>Assignment 3</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Oct 2</h3>
                            </div>
                            <h2 class="class-title">Day 04</h2>

                            <ul class="class-itinerary">
                                <li>CSS3 styling</li>
                                <li>CSS3 selectors</li>
                                <li>CSS transitions and animations</li>
                                <li>Assignment 4</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Oct 9</h3>
                            </div>
                            <h2 class="class-title">Day 05</h2>

                            <ul class="class-itinerary">
                                <li>Responsive Images</li>
                                <li>Mobile navigation systems</li>
                                <li>Mid-term project</li>
                                <li>Assignment 5</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Oct 16</h3>
                            </div>
                            <h2 class="class-title">Day 06</h2>

                            <ul class="class-itinerary">
                                <li>Mid-term Exam</li>
                                <li>Lab Time</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Oct 23</h3>
                            </div>
                            <h2 class="class-title">Day 07</h2>

                            <ul class="class-itinerary">
                                <li>CSS Grid</li>
                                <li>Assignment 6</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Oct 30</h3>
                            </div>
                            <h2 class="class-title">Day 08</h2>

                            <ul class="class-itinerary">
                                <li>SASS</li>
                                <li>Assignment 7</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Nov 6</h3>
                            </div>
                            <h2 class="class-title">Day 09</h2>

                            <ul class="class-itinerary">
                                <li>Git and GitHub</li>
                                <li>Final Group Project</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Nov 13</h3>
                            </div>
                            <h2 class="class-title">Day 10</h2>

                            <ul class="class-itinerary">
                                <li>Servers</li>
                                <li>htaccess</li>
                                <li>PHP Review</li>
                                <li>Javascript Review</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Nov 20</h3>
                            </div>
                            <h2 class="class-title">Day 11</h2>

                            <ul class="class-itinerary">
                                <li>Lab Time</li>
                            </ul>
                        </a>
                    </article>

                    <article class="scheduled-class">
                        <a href="#" class="lesson-link">
                            <div class="date-wrapper">
                                <h3 class="class-date">Nov 27</h3>
                            </div>
                            <h2 class="class-title">Day 12</h2>

                            <ul class="class-itinerary">
                                <li>Final Exam</li>
                                <li>Lab Time</li>
                            </ul>
                        </a>
                    </article>
                </section>
            </main>

            <?php include "./templates/footer.php"?>
            
        </div>
    </body>
    <?php include "./templates/scripts.php"?>
</html>