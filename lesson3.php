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
                            <li>• A stylesheet is "preferred" if it is linked with <strong>rel="stylesheet"</strong>
                                and has a <strong>title</strong> attribute. these styles will be used as the default. preferred
                                stylesheets with the same title are grouped together</li>
                            <li>Finally, a stylesheet is "alternate" if it is linked with <strong>rel="alternate stylesheet"</strong> and has a <strong>title</strong>. 
                                These stylesheets are supposed to allow the user to choose stylesheets, they are grouped together by <strong>title</strong> 
                                and show up in the browser's stylesheet selector if it has one (<strong>View > Page Style</strong> in Firefox). 
                                Each group (by <strong>title</strong>) is mutually exclusive.</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Persistent Styles</h3>

                        <p>Persistent styles apply in all cases, even when alternate styles are chosen.</p>

                        <pre>
                            &#x3C;!-- rel=&#x22;stylesheet&#x22; with NO title=&#x22;&#x22; --&#x3E;
                            &#x3C;link&#x9;rel=&#x22;stylesheet&#x22; 
                            &#x9;href=&#x22;css/persistent_styles.css&#x22; /&#x3E;
                        </pre>
                    </article>

                    <article>
                        <h3>Preferred Styles</h3>

                        <p>Preferred styles will be the default, but will be replaced if alternate styles are chosen.</p>

                        <pre>
                            &#x3C;!-- rel=&#x22;stylesheet&#x22; AND a title=&#x22;&#x22; --&#x3E;
                            &#x3C;link&#x9;rel=&#x22;stylesheet&#x22; 
                            &#x9;href=&#x22;css/default_styles.css&#x22;
                            &#x9;title=&#x22;Standard Styling&#x22;&#x9;/&#x3E;
                        </pre>
                    </article>

                    <article>
                        <h3>Alternate Styles</h3>

                        <p>Alternate styles will not be applied by default, but may be chosen by the user agent. Each alternate stylesheet must have a <strong>title=""</strong>.</p>

                        <pre>
                            &#x3C;!-- use rel=&#x22;alternate stylesheet&#x22; for alternative stylesheets... --&#x3E;
                            &#x3C;link&#x9;rel=&#x22;alternate stylesheet&#x22; 
                            &#x9;href=&#x22;css/large_text.css&#x22;
                            &#x9;title=&#x22;Large Text Styles&#x22; /&#x3E;
                        </pre>
                    </article>

                    <article>
                        <h3>Grouping Stylesheets</h3>

                        <p>If more than one link tag shares the same <strong>title=""</strong> then they will be grouped together.</p>

                        <pre>
                            &#x3C;-- group stylesheets with shared title=&#x22;&#x22; --&#x3E;
                            &#x3C;link&#x9;rel=&#x22;alternate stylesheet&#x22; 
                            &#x9;href=&#x22;css/monchrome_layout.css&#x22;
                            &#x9;title=&#x22;Monochrome Styles&#x22;&#x9;/&#x3E;
                            &#x3C;link&#x9;rel=&#x22;alternate stylesheet&#x22; 
                            &#x9;href=&#x22;css/monchrome_fonts.css&#x22;
                            &#x9;title=&#x22;Monochrome Styles&#x22; &#x9;/&#x3E;
                        </pre>

                        <p>
                        To enable alternate stylesheet switching, you can either apply some javascript to manage the switch with hyperlinks, or use 
                        <a href="https://support.mozilla.org/en-US/questions/841578">Firefox for alternate stylesheets</a>.
                        </p>
                    </article>

                    <article>
                        <h3>@import: Managing Multiple CSS Files</h3>

                        <p>
                            You can use the <strong>@import</strong> method to import multiple stylesheets from a basic stylesheet that you link to. 
                            This will reduce the clutter that can sometimes occur within the <strong>&#x3C;head&#x3E;</strong> section.
                            It is also a great place to be able to manage your CSS. From your main document, create a <strong>&#x3C;link&#x3E;</strong> to your <strong>styles.css</strong> page.
                        </p>
                        <p>
                            In the body of the styles.css file, import as many files as you need:
                        </p>
                        <ul>
                            <li><strong>@import url("css/type.css");</strong></li>
                            <li><strong>@import url("css/nav.css");</strong></li>
                            <li><strong>@import url("css/template.css");</strong></li>
                        </ul>
                        <p>
                            <strong>NOTE:</strong> when using the @import directive in an external CSS file, ensure it comes before your CSS selector rules. It might be best to not include any CSS rules in a page that uses <strong>@import</strong>.
                        </p>
                    </article>
                    
                    <article>
                        <h3>@charset: Assigning CSS Character Set</h3>

                        <p>
                        If your CSS files only contain standard keyboard characters, assigning the character set is not required. 
                        The CSS language itself does not use any exotic characters, so assigning a charset is often omitted. 
                        If, however, your CSS needs to use special characters, ensuring the correct character set can be very important. 
                        Eg: When using a pseudoclass to add content to HTML <strong>content: "Äwesome!"</strong>
                        </p>
                        <p>
                        If needed, add the <strong>@charset</strong> rule to the top of the CSS document.
                        </p>
                        <pre>
                        /* assign charset at top of .css file */
                        @charset "utf-8";

                        /* CSS rules follow... */    
                        </pre>
                    </article>

                    <article>
                        <h3>@font-face And Font Servers</h3>

                        <p>Fonts that aren't available on the client machine can be provided by a third-party font server or by your website's server.</p>

                        <ul>
                            <li><a href="https://fonts.google.com/">Google Fonts</a></li>
                            <li><a href="https://fonts.adobe.com/">Adobe Typekit</a></li>
                            <li><a href="https://www.fontsquirrel.com/">Font Squirrel</a></li>
                            <li>Plenty more available online...</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Third Party Font Server</h3>

                        <p>
                        Browse the font server site, select the fonts you like and they wil provide you with code for a <strong>&#x3C;link /&#x3E;</strong> tag to add to your HTML. You can then use the font in your CSS.
                        </p>
                    </article>
                </section>
            </section>
        </main>

        <?php include "./templates/footer.php"?>

    </div>
</body>

</html>