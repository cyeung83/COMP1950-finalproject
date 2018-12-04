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
            
        <?php include "./templates/sidenav.php"?>

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
                        <li><strong>To Do</strong></li>
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
                </section>

                <section class="lesson-imports">
                    <h2>Imports</h2>

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
                </section>

                <section class="lesson-fonts">
                    <h1>Fonts</h1>
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

                        <pre>
                        &#x3C;!-- add the link tag to the HTML --&#x3E;
                        &#x3C;link href=&#x22;https://fonts.googleapis.com/css?family=Bungee&#x22; rel=&#x22;stylesheet&#x22; /&#x3E;&#x9;

                        /* use the font in the CSS */
                        selector{
                        &#x9;font-family: &#x27;Bungee&#x27;, cursive;
                        }
                        </pre>
                        <p>No longer stuck with 'Arial', 'Helvetica', 'Georgia' and the rest.</p>
                    </article>

                    <article>
                        <h3>Serve Fonts From Your Website</h3>

                        <p>
                        If the font(s) are copyright free, or if you have license to distribute a font, you can serve them yourself using the CSS <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face">@font-face</a> directive.
                        </p>
                        <p>
                        Different client systems will need fonts in varying formats, so if you are distributing the font yourself, be sure to have the font available in most common formats.
                        </p>

                        <ul>
                            <li>Obtain the font(s) you wish to use. You must either have license to distribute the font or the font must be copyright free.</li>
                            <li>Upload your font(s) to a <a href="https://www.fontsquirrel.com/tools/webfont-generator">Font Generator</a> to obtain a font kit including various formats for the font(s)</li>
                            <li>Uncompress the font kit and locate it somewhere with your website files</li>
                            <li>Use <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face">@font-face</a> to load the fonts. The font-kit generated by Squirrel Font will include some same CSS to help you with the sometimes volumous coding</li>
                            <li>Apply the new font in CSS</li>
                        </ul>

                        <pre>
                            /* load the font in CSS */
                            @font-face {
                                font-family: &#x27;alex_brushregular&#x27;;
                                src: url(&#x27;/fonts/alexbrush-regular-webfont.woff2&#x27;) format(&#x27;woff2&#x27;),
                                    url(&#x27;/fonts/alexbrush-regular-webfont.woff&#x27;) format(&#x27;woff&#x27;), 
                            &#x9; url(&#x27;/fonts/alexbrush-regular-webfont.ttf&#x27;) format(&#x27;tff&#x27;);
                            }

                            /* use the font in CSS */
                            selector{&#x9;
                            &#x9;font: bold 20px alex_brushregular ;
                            &#x9;color:#555;
                            }   
                        </pre>
                        <b>Don't get carried away with wild font choices. Some fonts have very poor readability, reducing accessibility.</b>
                    </article>
    
                    <article>
                        <h3>CSS Measurements</h3>

                        <p>In CSS, there are a number of measurement values that can be used in declarations.</p>                    
                    </article>        

                    <article>
                        <h3>Size measurements</h3>
                        <ul>
                            <li><strong>px</strong> - Pixels is one of the most common measuring types. It is specific to computers, as it renders based on the pixel-display of all monitors. Great for specific measurements on boxes and borders, but for fonts, it can lead to difficulty as some browsers don't allow scaling and font can end up too small</li>
                            <li><strong>%</strong> - Percentage measurements are also very common</li>
                            <li><strong>em</strong> - A relative measurement of the letter "m" in the chosen font. This is a popular one for spacing around text, as it inherits the font dimensions</li>
                            <li><strong>rem</strong> - Similar to em, this will inherit only the Root value, helpful for avoiding 'compound inheritance' values</li>
                            <li><strong>pt</strong> - Points is an aold system related to type-setting that had a standard size for points. This is a relative size based on the users' system</li>
                            <li><strong>pc</strong> - Picas is a very old system that was frequently related to typewritten documents. Rarely used</li>
                            <li><strong>ex</strong> - Similar to em, this is a relative measurement of the letter "x". However, it is rarely used, and not fully supported</li>
                            <li><strong>vh, vw, vmin, vmax</strong> - size relative to viewport widths and heights. very useful for scaling, though may not enjoy full support yet</li>
                            <li><strong>named</strong> - This refers to fonts and a few other elements. The named sizes are xx-small, x-small, small, medium, large, x-large, xx-large. They are relative to the browsers base font size</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Color Measurement</h3>

                        <p>
                        Colors can be specified in a number of ways, corresponding to the system that your organization or visual element requires. Almost all color systems use a method for expressing a combination of the three color spaces used for displaying colors on computer monitors: Red Green and Blue.
                        </p>

                        <ul>
                            <li><strong>Hex: #003366</strong> - One of the most common systems, it combines 2 digits each for Red Green and Blue. Each hex pair stand stands for digits between 00 and FF in hexadecimal</li>
                            <li><strong>Compact Hex: #f30</strong> - This is almost identical to the Hex version, except that when three numbers are used, most browsers will just double-up each digit. So, <strong>#f30</strong> will become <strong>#ff3300</strong></li>
                            <li><strong>Named: cornflowerblue</strong> - Although the official W3C specification only lists 16 named colors, almost every browser supports the various <a href="https://www.google.ca/search?q=css+named+colors&gws_rd=ssl">named colors</a></li>
                            <li><strong>RGB: rgb(255, 0, 255)</strong> - This allows the user to specify the same thing as Hex, but in Decimal format</li>
                            <li><strong>RGB %: rgb(100%, 0%, 50%)</strong> - Almost identical to RGB, but with percentages of each color space instead</li>
                        </ul>
                    </article>
                </section>

                <section class="lesson-compact-css">
                    <h2>Compact CSS Code</h2>

                    <p>
                        When building your CSS rules, there are some easy ways to compact your code, reducing code bloat and filesize.
                    </p>

                    <article>
                        <h3>Grouping selectors</h3>
                        
                        <ul>
                            <li>If you would like to apply the same style to a multitude of different selectors, you can group them with the comma</li>
                            <li><strong>h1, h2, h3, h4, h5 { color: red; }</strong></li>
                            <li>This can be done with Elements, classes and IDs</li>
                            <li>Specific rules for H3 (for example) can come later</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Grouping comes to Classes</h3>

                        <ul>
                            <li>As well as grouping Elements, you can also group classes</li>
                            <li>Define several classes: <strong>.cool{ color:red; } .wicked { border:1px solid black; }</strong></li>
                            <li>Assign several classes at once: <strong>&#x3C;p class=&#x22;cool wicked&#x22;&#x3E;</strong> will select both the <strong>cool</strong> and <strong>wicked</strong> classes</li>
                            <li>The order of the attribute values is irrelevant</li>
                            <li>Case is important! Remember to use a single rule for CSS naming and stick with it</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Rule Compacting</h3>

                        <p>There are a lot of rules that will accept a compacted ruleset:</p>

                        <ul>
                            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/margin">margin</a>: <strong>top right bottom left;</strong></li>
                            <li><a href="https://developer.mozilla.org/en-US/docsa/Web/CSS/padding">padding</a>: <strong>top right bottom left;</strong></li>
                            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/border">border</a>: <strong>width style color;</strong></li>
                            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font">font</a>: <strong>font-style font-variant font-weight font-size/line-height font-family;</strong></li>
                            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/background">background</a>: <strong>color image position repeat size attachment;</strong></li>
                        </ul>

                        <p>Box model properties support 1, 2, 3 and 4 values. For example:</p>

                        <ul>
                            <li><strong>border-width:10px;</strong></li>
                                <ul><li>all four borders are 10px</li></ul>
                            <li><strong>border-width:10px 20px;</strong></li>
                                <ul>
                                    <li>top and bottom borders are 10px</li>
                                    <li>left and right borders are 20px</li>
                                </ul>
                            <li><strong>border-width:10px 20px 30px;</strong></li>
                                <ul>
                                    <li>top border is 10px</li>
                                    <li>left and right borders are 20px</li>
                                    <li>bottom border is 30px</li>
                                </ul>
                            <li><strong>border-width:10px 20px 30px 40px;</strong></li>
                                <ul>
                                    <li>top border is 10px</li>
                                    <li>right border is 20px</li>
                                    <li>bottom border is 30px</li>
                                    <li>left border is 40px</li>
                                </ul>
                        </ul>
                        
                        <p>
                            Note you do not need to specify values for all fields in a compact rule. Just keep the space delimited list in the correct order. For example, you could specify several font values all at once:
                        </p>
                        
                        <pre>
                            font: italic small-caps bold 1.3em "helvetica", sans-serif; 
                        </pre>

                        <p>or, specify only a select couple.</p>
                        <pre>
                            font: 1.3em "helvetica", sans-serif;
                        </pre>
                    </article>
                </section>

                <section class="lesson-css-selectors">
                    <h2>CSS Selectors</h2>

                    <p>There are several <a href="http://css.maxdesign.com.au/selectutorial/">advanced CSS selector techniques</a> that provide plenty of options for the application of style.</p>
                
                    <article>
                        <h3>Universal Selector</h3>

                        <ul>
                            <li>This is a fairly widely supported selector: the asterisk *</li>
                            <li>Use it to specify a global rule</li>
                            <li><strong>* { color: red; }</strong> will make all font color red on your page</li>
                            <li>The universal selector can be very powerful, as it can command a lot of changes to your styles,</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Pseudo-classes</h3>

                        <p>
                            A Pseudo-class is a selector that allows you to reference a specific action or attribute of an element. 
                            This is most often used when specifying <strong>a</strong> attributes, such as <strong>:visited</strong> and <strong>:link</strong>.
                            There are other uses for pseudo elements, that will allow for greater detail in styling content, 
                            such as <strong>:first-letter</strong> and <strong>:first-line</strong>. 
                            These allow the browser to apply a style based on an unselected, but displayed element.
                        </p>
                        <p>Best part: No <strong>span</strong> or <strong>div</strong> required to access these pseudo-elements.</p>
                        <ul>
                            <li>Within <strong>a</strong> pseudo-elements in particular, it's important to follow a certain order:</li>
                            <ul>
                                <li><strong>a:link</strong></li>
                                <li><strong>a:visited</strong></li>
                                <li><strong>a:hover</strong></li>
                                <li><strong>a:active</strong></li>
                            </ul>
                        </ul>
                        <p>Easy mnemonic: LVHA - <strong>L</strong>o<strong>V</strong>e - <strong>HA</strong>te. Because of the way that CSS applies rules, it looks at the LAST rule for a given element and applies more weight to it. For example, if you are hovering over a link, you don't want to see the link state</p>
                        <ul>
                            <li>There are several additional <a href="http://css.maxdesign.com.au/selectutorial/selectors_pseudo_class.htm">pseudo-classes</a> and <a href="http://css.maxdesign.com.au/selectutorial/selectors_pseudo_element.htm">pseudo-elements</a></li>
                            <ul>
                                <li><strong>selector:before, selector:after</strong> - add text content before or after the selector's content</li>
                                <li><strong>selector:first-line, selector:first-letter</strong> - style the first line or letter of the selector</li>
                                <li><strong>selector:first-of-type, selector:last-of-type</strong> - style the first or last tag of the selector type</li>
                                <li><strong>selector:nth-of-type(n)</strong> - select the nth() tag of the same type as selector</li>
                                <li><strong>selector:nth-child(n)</strong> - select the nth() child</li>
                                <li><strong>selector:nth-child(2n)</strong> - select every even numbered child</li>
                                <li><strong>selector:nth-child(2n+1)</strong> - select every odd numbered child</li>
                            </ul>
                        </ul>
                    </article>
                    
                    <article>
                        <h3>Descendant Selectors</h3>

                        <ul>
                            <li>Separated by a space, the last element is the one being styled</li>
                            <li><strong>h1 em</strong> will apply rules to all em's within an h1</li>
                            <li>You can have as many as you want: <strong>ul ol ul li</strong></li>
                            <li>Great for specifying different styles when they apply only in certain areas</li>
                            <li><strong>#nav a {...}</strong> will only apply these rules to Anchors within the div called nav</li>
                            <li>Degree of separation can be infinite, so be careful</li>
                            <li><<strong>p em</strong> will match ANY em that descends from a paragraph, no matter how nested/li>
                        </ul>
                    </article>

                    <article>
                        <h3>Child Selectors</h3>

                        <ul>
                            <li>Uses the > combinator to specify children</li>
                            <li>Will select an element that is directly descended from another element</li>
                            <li><strong>p > strong </strong>will only select a strong tag that is inside a paragraph</li>
                            <li>Will not select a strong tag embedded in any other tag (even if it is within a paragraph)</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Adjacent Sibling Selectors</h3>

                        <ul>
                            <li>The + combinator specifies the first sibling tag following the root</li>
                            <li>It will not include the root for styling</li>
                            <li><strong>div + h2</strong> will select the first sibling h2 following a div tag</li>
                        </ul>
                    </article>

                    <article>
                        <h3>General Sibling Selectors</h3>

                        <ul>
                            <li>The ~ combinator specifies all siblings tags following the root</li>
                            <li>It will not select sibling tags that precede the root, nor will it include the root</li>
                            <li><strong>h1 ~ h2</strong> will select all sibling h2 tags that follow an h1</li>
                        </ul>
                    </article>

                    <article>
                        <h3>Attribute Selectors</h3>

                        <ul>
                            <li>You can also select elements by what the element contains</li>
                            <li>The method is: <strong>element[attribute=value]</strong></li>
                            <li>If you specify an attribute with no value, you will match any element that simply has the attribute present (no matter what it's value is)</li>
                            <li><strong>p[align] {color: red;}</strong> will turn red any paragraph that contains an align attribute</li>
                            <li>Similarly, <strong>img[alt] {border: 1pt red solid; }</strong> will draw a red line around all images with an alt attribute</li>
                            <li>You can further direct the attribute selector to find content that is at the beginning (using the carat: ^), somewhere inside (using the asterisk: *) or end of a value (using the dollar sign: $)</li>
                            <li>
                                <p>Attribute selector examples:</p>

                                <ul>
                                    <li><strong>img[alt]</strong> - select all img tags that have alt attributes</li>
                                    <li><strong>img[src="images/pic.jpg"]</strong> - select img tags whose src is 'images/pic.jpg'</li>
                                    <li><strong>img[src^="gallery/"]</strong> - select all img tags whose src BEGINS with 'gallery/'</li>
                                    <li><strong>img[src*="logo"]</strong>- select all img tags whose src CONTAINS 'logo'</li>
                                    <li><strong>img[src$=".png"]</strong> - select all img tags whose src ENDS with '.png'</li>
                                </ul>
                            </li>
                        </ul>
                    </article>
                </section>

                <section class="lesson-rule-order-specificity">
                    <h2>Rule Order & Specificity</h2>

                    <p>
                        When a style declaration is found to be in conflict with a previously declared style, there is a method for determining which one will win out. The process is built into every web browser, and almost all of them calculate the values identically (for once!).
                    </p>
                    <p>
                        Here is how the W3C defines the process by which style order is determined:
                    </p>
                    
                    <ul>
                        <li><strong>Discover all declarations.</strong> Find all declarations that apply to the element and property in question, for the target media type. Declarations apply if the associated selector matches the element in question.</li>
                        <li>
                            <p><strong>Sheet Order.</strong> The primary sort of the declarations is by weight and origin: for normal declarations, author style sheets override user style sheets which override the default style sheet.</p>
                            <ul>
                                <li>o	Note: For "!important" declarations, user style sheets override author style sheets which override the default style sheet. "!important" declaration override normal declarations. An imported style sheet has the same origin as the style sheet that imported it.</li>
                            </ul>
                        </li>
                        <li><strong>Specificity:</strong> The secondary sort is by specificity of selector: more specific selectors will override more general ones. Pseudo-elements and pseudo-classes are counted as normal elements and classes, respectively.</li>
                        <li><strong>Sort by Order:</strong> Finally, sort by order specified: if two rules have the same weight, origin and specificity, the latter specified wins. Rules in imported style sheets are considered to be before any rules in the style sheet itself.</li>
                    </ul>

                    <p>
                    All of the rules are pretty straightforward, except for Specificity, which bears some explanation.
                    <strong>Specificity</strong> is a method for determining what rules are applied when a conflict between two selectors occurs. Through a method of adding values when certain elements and selectors are present, a specificity number can be applied to any CSS rule. The one with highest specificity wins and the associated rule is applied to the element(s) in question.
                    </p>

                    <article>
                        <h3>Ruleset for Specificity</h3>

                        <p>
                            Style sheets can also override conflicting style sheets based on their level of specificity, where a more specific style will always win out over a less specific one. It is simply a counting game to calculate the specificity of a selector.
                        </p>

                        <ul>
                            <ol>
                                <li>Count the number of IDs in the selector.</li>
                                <li>Count the number of CLASS, pseudoclass, and attribute selectors.</li>
                                <li>Count the number of HTML tag names in the selector.</li>
                            </ol>
                        </ul>

                        <p>
                            Next, write the three numbers in exact order with no spaces or commas to obtain a three digit number. (Note, you may need to convert the numbers to a larger base to end up with three digits.) The final list of numbers corresponding to selectors will easily determine specificity with the higher numbers winning out over lower numbers. Following is a list of selectors sorted by specificity:
                        </p>

                        <ul>
                            <li>#id1<br>/*<strong>id</strong>=1 <strong>class</strong>=0 <strong>HTML</strong>=0 --> specificity = 100 */</li>
                            <li>UL UL LI.red<br>/*<strong>id</strong>=0 <strong>class</strong>=1 <strong>HTML</strong>=3 --> specificity = 013 */</li>
                            <li>LI.red<br>/*<strong>id</strong>=0 <strong>class</strong>=1 <strong>HTML</strong>=1 --> specificity = 011 */</li>
                            <li>LI<br>/*<strong>id</strong>=0 <strong>class</strong>=0 <strong>HTML</strong>=1 --> specificity = 001 */</li>
                        </ul>
                    </article>

                    <article>
                        <h3>!important rule</h3>

                        <ul>
                                <li>•	This declaration, when added to a rule, will override almost all other declarations, with no respect for specificity.</li>
                                <li>•	It indicates that this rule should take over any previous rules that might govern a specific element.</li>
                                <li>•	Example <strong>.selector{ color:blue !important; }</strong></li>
                                <li>•	This rule can cause havoc if overused, as it will overrule any other declaration with the same selector. <strong>Be careful with !important</strong></li>
                            </ul>
                    </article>
                </section>

                <section class="lesson-to-do">
                    <h2>To Do</h2>

                    <ul>
                        <li>Download, review, and complete the homework assignment from <a href="https://id.bcit.ca/my.policy">D2L</a></li>
                        <li>Find a partner for your homework.</li>
                        <li>Practice using <a href="http://bcitcomp.ca/1950/lecture/03/#advanced_selectors">advanced CSS selectors</a></li>
                    </ul>
                </section>
            </section>
        </main>

        <?php include "./templates/footer.php"?>

    </div>
    <?php include "./templates/scripts.php"?>
</body>
</html>