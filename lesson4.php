<!doctype html>
<html lang="en">

<?php
    $pageName = "Lesson 1"; 
    include "./templates/head.php" 
?>


<body>
    <div class="wrapper">

        <?php include "./templates/header.php"?>

        <main class="lesson-main">
            
        <?php include "./templates/sidenav.php"?>

            <section class="lesson-content lesson-01">
            <h1>Lesson 2</h1>
                    <h2>Agenda</h2>
                    <ul>
                        <li><strong>Charsets</strong></li>
                        <li><strong>HTML</strong>, <strong>XHTML</strong>, <strong>HTML5</strong></li>
                        <li> <strong>Semantics</strong></li>
                        <li><strong>Forms</strong>, <strong>SVG</strong>, <strong>Multimedia</strong></li>
                        <li><strong>To Do</strong></li>
                    </ul>
                    <p><strong>Character Sets And Languages</strong></p>
                    <p>The W3C recommends the
                        <a href="https://www.w3.org/International/questions/qa-choosing-encodings">
                            <strong>UTF-8 charset</strong>
                        </a>
                        for web development. It includes an impressive array of languages and
                        special characters, and is well supported in common devices.
                    </p>
                    <p><strong>Assign Character Set</strong></p>
                    <p>If it is not specified, a web browser will choose the character set it
                        thinks is most appropriate, but it is a better practice for the developer
                        to ensure the correct character set by applying the <strong>meta</strong>
                        tag to the <strong>head</strong> section of every HTML page:</p>
                    <p><strong>&lt;meta charset="utf-8" /&gt;</strong></p>
                    <ul>
                        <li>Write all your text-based code (<strong>.html</strong>, <strong>.css</strong>, <strong>.js</strong>,
                            <strong>.php</strong>,
                            etc) in UTF-8. At development time, ensure your text editor is saving
                            files in this format. This setting is usually found in the
                            application's Preferences menu option.</li>
                        <li>Unless your audience includes very old browsers, you can
                            <a href="https://tools.oratory.com/altcodes.html">
                                <strong>code special characters</strong>
                            </a>
                            directly into the HTML (you dont need to use HTML entities for most
                            special characters).</li>
                        <li>You cannot copy-paste rich text (such as Microsoft Word, or WordPad)
                            into your HTML. The rich text formatting may result in an unreadable
                            mess.</li>
                        <li>An HTTP server can over-ride your charset preferences when it generates
                            the HTTP header. Details on how to control this will be discussed later
                            in this course.</li>
                    </ul>
                    <p><strong>HTML lang Attribute</strong></p>
                    <p>Use the <strong>lang=""</strong> attribute to
                        <a href="https://www.w3.org/International/questions/qa-html-language-declarations">
                            <strong>declare the language in HTML</strong>
                        </a>
                        . This is usually applied to the <strong>html</strong> element. Assigning
                        the appropriate language code will apply to all contained content, unless
                        over-ridden with another <strong>lang=""</strong>.</p>
                    <p>Use the language abbreviations from the
                        <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php">
                            <strong>standard ISO 639-1</strong>
                        </a>
                        code set (don't use ISO 639-2).</p>
                    <p><strong>HTML</strong></p>
                    <p>What started as a language defined by <a href="http://www.w3.org/MarkUp/SGML/"><strong>SGML</strong></a>
                        <em>(Standard Generalized Markup Language)</em>, HTML is used to mark up
                        billions of pages, making up the bulk of the web.</p>
                        <ul>
                        <li>Late 1991, Tim Berners-Lee releases the first iteration of what would
                            become HTML 2.0 (there was no real 1.0+)</li>
                        <li>HTML was a language created at the dawn of the Web, using SGML
                            (Standard Generalized Markup Language) as a template</li>
                        <li>Over the next decade, various additions, improvements and changes are
                            introduced</li>
                        <li><a href="https://www.w3.org/TR/1999/REC-html401-19991224/">
                                <strong>HTML 4.01</strong></a>
                            released in December 1999</li>
                        <li>Initially used for documents and a place for the technically inclined,
                            the web did not have the international pervasiveness it does today</li>
                        <li> Most developers were new to the language and there were no real classes
                            in it</li>
                        <li>People had to learn as they went along</li>
                        <li>A lot of early sites are poorly designed</li>
                    </ul>
                    <p><strong>HTML 4.01 template</strong></p>
                    <p>The problem with the state of HTML then was its reputation as a loose
                        language. Poorly structured code would be rendered differently across user
                        agents, leading to forked code and less predictable results.</p>
                    <p><strong>XHTML</strong></p>
                    <p>The
                        <a href="https://www.w3.org/TR/2002/REC-xhtml1-20020801/">
                            <strong>XHTML specification</strong></a>
                        was the result of rewriting
                        <a href="https://www.w3.org/TR/1999/REC-html401-19991224/">
                            <strong>HTML 4.01</strong>
                        </a>
                        using the ruleset derived from <a href="https://www.w3.org/XML/"><strong>XML</strong></a>
                    </p>
                    <ul>
                        <li>HTML 4.01 + XML = XHTML 1.0</li>
                        <li>X = eXtensible</li>
                        <li>X = XML related</li>
                        <li>Better, more predictable coding patterns.</li>
                        <li>Verifiable or "well-formed" code can be produced.</li>
                        <li>Forces a higher standard of HTML.</li>
                        <li>Predictable behavior across user agents.</li>
                        <li>Porting to HTML5 is easy (if you also observe <strong>semantic</strong>
                            guidelines).</li>
                    </ul>
                    <p><strong>XHTML Rules:</strong></p>
                    <ul>
                        <li>All elements must be properly nested</li>
                        <ul type="circle">
                            <li> This is not valid: <strong>&lt;p&gt;&lt;b&gt;Bolded Text&lt;/p&gt;&lt;/b&gt;</strong></li>
                            <li>This can be a problem with things like Lists &lt;ol&gt; and
                                &lt;ul&gt;.</li>
                            <li>Especially when closing the List Item &lt;li&gt; tag that contains
                                the &lt;ul&gt; or &lt;ol&gt; tag.</li>
                        </ul>
                        <li>All tags must close</li>
                        <ul type="circle">
                            <li>Example: <strong>&lt;p&gt;Some text here&lt;/p&gt;</strong></li>
                            <li>Empty Elements are closed as well: <strong>&lt;br /&gt;</strong> or <strong>&lt;img src="#"
                                    /&gt;</strong></li>
                            <li>An extra space is required before the slash to work with all
                                browsers.</li>
                        </ul>
                        <li>All tag names must be in lower case</li>
                        <ul type="circle">
                            <li><strong>&lt;Img Src="some_image.gif"&gt;</strong>
                                is not valid</li>
                        </ul>
                            <li>Attribute names are always in lower case
                            </li>
                        <ul type="circle">
                            <li><strong>&lt;p ALIGN="center"&gt;</strong>
                                should be <strong>&lt;p align="center"&gt;</strong></li>
                        </ul>
                        <li>All attributes must be quoted</li>
                        <ul type="circle">
                            <li>
                                <strong>&lt;body bgcolor=black&gt;</strong>
                                will not work, you need: <strong>&lt;body bgcolor="black"&gt;</strong>
                            </li>
                        </ul>
                        <li>
                            Attributes cannot be minimized
                        </li>
                        <ul type="circle">
                            <li>
                                <strong>&lt;input type="checkbox" checked&gt;</strong>
                                cannot be used. The valid code is: <strong>&lt;input type="checkbox" checked="checked"
                                    /&gt;</strong>
                            </li>
                        </ul>
                        <li>
                            Name Attribute is no longer used (except with forms). Replace "name"
                            with "id".
                        </li>
                        <ul type="circle">
                            <li><strong>&lt;img src="picture.gif" name="myimage" /&gt;</strong>
                                will not validate. Use <strong>id="myimage"</strong> instead.</li>
                        </ul>
                        <li>
                            Mandatory Elements: Every XHTML document <strong>must have</strong>
                            these elements:
                        </li>
                        <ul type="circle">
                            <li><strong>&lt;html&gt;</strong></li>
                            <li><strong>&lt;head&gt;</strong></li>
                            <li><strong>&lt;title&gt;</strong></li>
                            <li><strong>&lt;body&gt;</strong>
                            </li>
                            <li>
                                The <strong>&lt;!DOCTYPE&gt;</strong> declaration <em>must</em> be
                                there, but it is <em>part</em> of the document itself rather than
                                an element of the document.
                            </li>
                        </ul>
                        <li>
                            Documents must be well-formed
                        </li>
                        <ul type="circle">
                            <li>
                                The document must conform to all of the above rules
                            </li>
                        </ul>
                        <li>
                            Optional XML declaration
                        </li>
                        <ul type="circle">
                            <li>
                                Not <em>required</em>, but good practice:
                            </li>
                            <li>
                                <strong>&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</strong>
                            </li>
                        </ul>
                        <li>
                            Optional Element: An XHTML document should also declare the type and
                            character encoding in the head section to ensure the server sends the
                            correct content-type header:
                            <br/>
                            <strong>&lt;meta http-equiv="Content-Type" content="text/html"
                                charset="UTF-8"&gt;
                            </strong>
                        </li>
                    </ul>
                    

        <?php include "./templates/footer.php"?>

    </div>

    <?php include "./templates/scripts.php"?>
</body>
</html>