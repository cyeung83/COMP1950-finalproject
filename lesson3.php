<!doctype html>
<html lang="en">

<?php
    $pageName = "Lesson 3"; 
    include "./templates/head.php" 
?>

<body>
    <div class="wrapper">

        <?php include "./templates/header.php"?>

        <main class="lesson-main">
            <nav class="side-nav">
                <ul>
                    <li><a href="#0">Lesson 1</a></li>
                    <li><a href="#0">Lesson 2</a></li>
                    <li><a href="#0">Lesson 3</a></li>
                    <li><a href="#0">Lesson 4</a></li>
                    <li><a href="#0">Lesson 5</a></li>
                    <li><a href="#0">Lesson 9</a></li>
                    <li><a href="#0">Lesson 7</a></li>
                    <li><a href="#0">Lesson 8</a></li>
                    <li><a href="#0">Lesson 9</a></li>
                    <li><a href="#0">Lesson 10</a></li>
                    <li><a href="#0">Lesson 11</a></li>
                    <li><a href="#0">Lesson 12</a></li>
                </ul>
            </nav>
            <section class="lesson-content lesson-03">
                <h1>Lesson 3</h1>
                <section class="lesson-agenda">
                    <h2>Agenda</h2>
                    <ul>
                        <li><strong>Referencing Stylesheets</strong></li>
                        <li><strong>Importing</strong></li>
                        <li><strong>Fonts</strong></li>
                        <li><strong>Compact CSS</strong></li>
                        <li><strong>Advanced Selectors</strong></li>
                        <li><strong>Rule Specificity</strong></li>
                    </ul>
                </section>

                <section class="lesson-ref-css">
                    <h2>Referencing CSS</h2>

                    <p>When linking to external style sheets, there are a number of features to be aware of:</p>
                    <ul>
                        <li>Each stylesheet requires it's own <strong>link</strong> tag</li>
                        <li>Multiple stylesheets can be loaded (main.css, fonts.css, layout.css, etc)</li>
                        <li><strong>rel</strong> determines how the HTML will use the file linked to (REQUIRED)</li>
                        <li><strong>href</strong> defines the path, relative or absolute, to the css file (REQUIRED)</li>
                        <li><strong>type</strong> attribute is has been deprecated (dropped in HTML5)</li>
                        <li><strong>title</strong> attribute allows the user to group stylesheets</li>
                        <li><strong>media</strong> attribute allows you to specify what medium this should be viewed in</li>
                    </ul>
                    <pre>
                        &#x3C;link&#x9;rel=&#x22;stylesheet&#x22; 
                        &#x9;&#x9;href=&#x22;http://www.mysite.com/css/styles.css&#x22; 
                        &#x9;&#x9;type=&#x22;text/css&#x22; 
                        &#x9;&#x9;title=&#x22;Main Style&#x22; 
                        &#x9;&#x9;media=&#x22;screen&#x22;/&#x3E;
                    </pre>

                    <article>
                        <h3>Media variations: media attribute</h3>
                        <ul>
                            <li><strong>media="type"</strong> can be a powerful tool</li>
                            <li>Examples of media types:
                                <ul>
                                    <li><strong>all</strong> - well supported, commonly used (DEFAULT)</li>
                                    <li><strong>aural</strong></li>
                                    <li><strong>braille</strong></li>
                                    <li><strong>embossed</strong></li>
                                    <li><strong>handheld</strong> - not common (smart phones identify as screen)</li>
                                    <li><strong>print</strong> - well supported, commonly used</li>
                                    <li><strong>projection</strong></li>
                                    <li><strong>screen</strong> - well supported, commonly used</li>
                                    <li><strong>tty</strong></li>
                                    <li><strong>tv</strong></li>
                                </ul>
                            </li>
                            <li>
                                Note that most smart phone devices (iPhones, Andriod, etc) do not identify themselves
                                as media type <strong>handheld</strong>. The reasoning was that the devices were more
                                than capable of
                                displaying standard web sites, so they identify as <strong>screen</strong>
                            </li>
                        </ul>
                    </article>

                    <article>
                        <h3>Alternate style sheets: rel attribute</h3>

                        <p>You can also have alternate stylesheets supported</p>
                        <ul>
                            <li><strong>rel="stylesheet"</strong>defines the default stylesheets to use</li>
                            <li><strong>rel="alternate stylesheet"</strong>allows different styles to be defined</li>
                            <li><strong>Tip:</strong>If you have multiple sheets that belong to one "look" make sure
                                they
                                all have the same <strong>title</strong></li>
                            <li>You can create alternate style sheets for users, allowing them to select which ones
                                they
                                would like to see</li>
                            <li>An example would be to create a 'Larger Text' style sheet with everything in a larger
                                font,
                                or providing an option for users to choose an austere, simple page instead of a
                                colorful/image heavy stylesheet</li>
                            <li>Many browsers are now giving users the ability to select which sheet they would like to
                                see. (Firefox: View > Page Style)</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Alternate style sheets: title attribute</h3>
                        <ul>
                            <li>A stylesheet is "persistent" if it is linked with <strong>rel="stylesheet"</strong> and
                                has no title attribute. All persistent stylesheets are always used when rendering</li>
                            <li>• A stylesheet is "preferred" if it is linked with <strong>rel=</strong>rel="stylesheet"
                                and has a title attribute. these styles will be used as the default. preferred
                                stylesheets with the same <strong>title</strong> are grouped together</li>
                            <li></li>
                        </ul>
                    </article>
                </section>



            </section>
        </main>

        <?php include "./templates/footer.php"?>

    </div>
</body>

</html>