<!doctype html>
<html lang="en">

    <?php
            $pageName = "Lesson 2"; 
            include "./templates/head.php" 
    ?>

    <body>
        <div class="wrapper">

            <?php include "./templates/header.php"?>

            <main class="lesson-main">

            <?php include "./templates/sidenav.php"?>
            
                <section class="lesson-content lesson-02">
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
                        <li>All elements must be properly nested
                        <ul>
                            <li> This is not valid: <strong>&lt;p&gt;&lt;b&gt;Bolded Text&lt;/p&gt;&lt;/b&gt;</strong></li>
                            <li>This can be a problem with things like Lists &lt;ol&gt; and
                                &lt;ul&gt;.</li>
                            <li>Especially when closing the List Item &lt;li&gt; tag that contains
                                the &lt;ul&gt; or &lt;ol&gt; tag.</li>
                        </ul></li>
                        <li>All tags must close
                        <ul>
                            <li>Example: <strong>&lt;p&gt;Some text here&lt;/p&gt;</strong></li>
                            <li>Empty Elements are closed as well: <strong>&lt;br /&gt;</strong> or <strong>&lt;img src="#"
                                    /&gt;</strong></li>
                            <li>An extra space is required before the slash to work with all
                                browsers.</li>
                        </ul></li>
                        <li>All tag names must be in lower case
                        <ul>
                            <li><strong>&lt;Img Src="some_image.gif"&gt;</strong>
                                is not valid</li>
                        </ul></li>
                            <li>Attribute names are always in lower case
                        <ul>
                            <li><strong>&lt;p ALIGN="center"&gt;</strong>
                                should be <strong>&lt;p align="center"&gt;</strong></li>
                        </ul></li>
                        <li>All attributes must be quoted
                        <ul>
                            <li>
                                <strong>&lt;body bgcolor=black&gt;</strong>
                                will not work, you need: <strong>&lt;body bgcolor="black"&gt;</strong>
                            </li>
                        </ul></li>
                        <li>
                            Attributes cannot be minimized
                        <ul>
                            <li>
                                <strong>&lt;input type="checkbox" checked&gt;</strong>
                                cannot be used. The valid code is: <strong>&lt;input type="checkbox" checked="checked"
                                    /&gt;</strong>
                            </li>
                        </ul></li>
                        <li>
                            Name Attribute is no longer used (except with forms). Replace "name"
                            with "id".
                        <ul>
                            <li><strong>&lt;img src="picture.gif" name="myimage" /&gt;</strong>
                                will not validate. Use <strong>id="myimage"</strong> instead.</li>
                        </ul></li>
                        <li>
                            Mandatory Elements: Every XHTML document <strong>must have</strong>
                            these elements:
                        <ul>
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
                        </ul></li>
                        <li>
                            Documents must be well-formed
                        <ul>
                            <li>
                                The document must conform to all of the above rules
                            </li>
                        </ul></li>
                        <li>
                            Optional XML declaration
                        <ul>
                            <li>
                                Not <em>required</em>, but good practice:
                            </li>
                            <li>
                                <strong>&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;</strong>
                            </li>
                        </ul></li>
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
                    <p>
                        <strong>XHTML 1.0 template</strong>
                    </p>
                    <p>
                        <strong>HTML5</strong>
                    </p>
                    <p>
                        As of October 28, 2014,
                        <a href="http://www.w3.org/TR/html5/">
                            <strong>HTML5 is the official W3C recommendation</strong>
                        </a>
                    </p>
                    <p>
                        HTML5 is more evolutionary then revolutionary. The bulk of previous HTML
                        elements and attributes are maintained, with a few deprecations, and
                        several additions.
                    </p>
                    <p>
                        Significant features include:
                    </p>
                    <ul>
                        <li>
                            Ultra simple Doctype: <strong>&lt;!DOCTYPE html&gt;</strong>
                        </li>
                        <li>
                            Specifies how browsers should behave with imperfect code
                        </li>
                        <li>
                            Ability to embed <a href="https://www.w3.org/XML/"><strong>XML</strong></a>, <a href="http://www.w3.org/Math/"><strong>MathML</strong></a>
                            or <a href="http://www.w3.org/Graphics/SVG/"><strong>SVG</strong></a>
                            markup.
                        </li>
                        <li>
                            Standardized Javascript API increases client side script compatibility
                            across browsers
                        </li>
                        <li>
                            Backwards compatible - older versions of HTML can effectively be
                            updated by simply changing the doctype to HTML5
                        </li>
                        <li>
                            Guiding principles: Enhance semantic coding, Support existing content,
                            Pave the cowpaths
                        </li>
                    </ul>
                    <p>
                        <strong>HTML 5 template</strong>
                    </p>
                    <p>
                        <strong>Paving the Cowpaths</strong>
                    </p>
                    <p>
                        Common developer practices have been simplified
                    </p>
                    <ul>
                        <li>
                            Finally a DOCTYPE we can all remember:
                            <br />
                            <strong>&lt;!DOCTYPE html&gt;</strong>
                        </li>
                        <li>
                            Declaring the character encoding is easier:
                            <br />
                            <strong>&lt;meta charset="utf-8"&gt;</strong>
                        </li>
                        <li>
                            When linking to external stylesheets the <strong>type</strong>
                            attribute is not required:
                            <br />
                            <strong>&lt;link rel="stylesheet" href="style.css" /&gt;</strong>
                        </li>
                        <li>
                            When embedding CSS the <strong>type</strong> attribute is not required:
                            <br />
                            <strong>&lt;style&gt;&lt;/style&gt;</strong>
                        </li>
                        <li>
                            Including javascripts is simplified as well (<strong>type</strong>
                            attribute is not required)
                            <br />
                            <strong>&lt;script src="javascripts.js"&gt;&lt;/script&gt;</strong>
                        </li>
                    </ul>
                    <p>
                        <strong>HTML5: Enhanced Semantic Coding</strong>
                    </p>
                    <p>
                        It is crucial for all HTML content to be
                        <a href="https://en.wikipedia.org/wiki/Semantic_HTML">
                            <strong>semantically marked up</strong>
                        </a>
                        . This is how browsers, search engines, and screen readers make sense of
                        online content.
                    </p>
                    <p>
                        HTML5 provides more than just adjustments to the markup, there are new,
                        powerfully semantic elements:
                    </p>
                    <ul>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section">
                                <strong>&lt;section&gt;</strong>
                            </a>
                            is a tag representing a document or application section. in general, if
                            you are planning to use a heading, start a new <strong>section</strong>
                            . a <strong>section</strong> must contain a heading, and may contain <strong>article</strong>(s),
                            possibly <strong>aside</strong>s or even
                            sub-<strong>section</strong>s
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article">
                                <strong>&lt;article&gt;</strong>
                            </a>
                            is an independent piece of content in a document (it could stand alone
                            if removed from the page). an <strong>article</strong> might be a blog
                            post, forum thread, news story, collection of product information, etc
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside">
                                <strong>&lt;aside&gt;</strong>
                            </a>
                            is for content "only slightly" related to the main page content. <strong>aside</strong>s fill
                            the role of a sidebar. if the content
                            could be removed without reducing the meaning of the main content of
                            the HTML document, then use an <strong>aside</strong>
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header">
                                <strong>&lt;header&gt;</strong>
                            </a>
                            and
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer">
                                <strong>&lt;footer&gt;</strong>
                            </a>
                            are for the header or footer of a page
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav">
                                <strong>&lt;nav&gt;</strong>
                            </a>
                            represents an area for navigation
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main">
                                <strong>&lt;main&gt;</strong>
                            </a>
                            used for containing content that is focused on the central topic of the
                            page. this content is usually unique to the page, and not shared by
                            other pages (main will usually NOT contain navigations, footers,
                            sidebars, etc)
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure">
                                <strong>&lt;figure&gt;</strong>
                            </a>
                            will likely contain an <strong>img</strong> or graphic. self-contained
                            content (could usually be removed from the page and stand on its own).
                            allows for captioning of embedded content like an image graphic or
                            video. if you want to associate a caption, add a <strong>figcaption</strong> child
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption">
                                <strong>&lt;figcaption&gt;</strong>
                            </a>
                            used as first or last child of <strong>figure</strong> to define the
                            caption or legend for a figure
                        </li>
                    </ul>
                    <p>
                        These represent some big changes in HTML, allowing for more flexibility in
                        coding and specifying content. Many of these will replace and reduce the
                        need for many <strong>div</strong> tags. eg: instead of the typical<strong>&lt;div id="header"&gt;</strong>,
                        use <strong>&lt;header&gt;</strong>.
                    </p>
                    <p>
                        Having trouble deciding which tag to use for what content? Try this
                        <a href="http://html5doctor.com/downloads/h5d-sectioning-flowchart.pdf">
                            <strong>HTML5 flowchart</strong>
                        </a>
                        .
                    </p>
                    <p>
                        <strong>HTML5 Semantic Alterations</strong>
                    </p>
                    <p>
                        HTML5 also brings a few notable semantic alterations to older tags:
                    </p>
                    <ul>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a">
                                <strong>&lt;a&gt;</strong>
                            </a>
                            though still an inline tag, it is now ok to nest multiple block level
                            tags (headings, paragraphs etc) inside an anchor tag
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/small">
                                <strong>&lt;small&gt;</strong>
                            </a>
                            no longer a 'physical' tag for smaller sized print, it now has semantic
                            value: meaning 'small print', i.e. 'legalese'. the <strong>big</strong>
                            element has been deprecated
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b">
                                <strong>&lt;b&gt;</strong>
                            </a>
                            no longer means 'render bold'. now it means the text is 'stylisticly
                            offset from the normal text', without conveying any extra importance.
                            to convey extra importance, use
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong">
                                <strong>&lt;strong&gt;</strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i">
                                <strong>&lt;i&gt;</strong>
                            </a>
                            now means the text is 'in an alternate voice or mood', without
                            conveying any extra emphasis. to convey extra emphasis, use
                            <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em">
                                <strong>&lt;em&gt;</strong>
                            </a>
                        </li>
                        <li>
                            Deprecated tags: <strong>&lt;big&gt;, &lt;font&gt;, &lt;strike&gt;</strong>, and a few
                            more. Developers should use CSS instead of these deprecated tags.
                        </li>
                        <li>
                            Deprecated attributes: <strong>align, bgcolor, border, height, size, type, width</strong> and
                            more. Developers should use CSS instead of these deprecated attributes.
                        </li>
                    </ul>
                    <p>
                        <strong>HTML5 Content Models</strong>
                    </p>
                    <p>
                        Pre-HTML5, there were basically two categories of tags: inline and block.
                        HTML5 intoduces a more nuanced set of categories that allow for greater
                        semantic sectioning of content. The content model will help the browser to
                        determine the semantics of your content.
                    </p>
                    <p>
                        <strong>Content Models</strong>
                    </p>
                    <ul>
                        <li>
                            text-level content: most inline tags
                        </li>
                        <li>
                            grouping content: most block tags
                        </li>
                        <li>
                            replaced content: all the form widgets and related tags
                        </li>
                        <li>
                            embedded content: video, audio, canvas
                        </li>
                        <li>
                            sectioning content: new structural, semantic options
                        </li>
                    </ul>
                    <p>
                        <strong>Sectioning Content</strong>
                    </p>
                    <p>
                        The
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section">
                            <strong>&lt;section&gt;</strong>
                        </a>
                        tag can be used to semantically group content. It can remove ambiguity when
                        a page is being processed by the browser, a screen reader, or search
                        engine.
                    </p>
                    <p>
                        For example, imagine you have created the following code:
                    </p>
                    <p>
                        Since content that follows a heading is presumed to be associated with that
                        heading, the code above carries plenty of semantic value already. But, if
                        the <strong>small</strong> tag's content is intended to apply to all
                        cities, a browser has no way of knowing that. It will instead assume the<strong>small</strong> tag
                        is associated with the preceding heading ( <strong>&lt;h3&gt;Tokyo&lt;/h3&gt;</strong>)
                    </p>
                    <p>
                        Use the <strong>section</strong> tag to explicitly demarcate the start and
                        end of the related content:
                    </p>
                    <p>
                        This new sectioning will inform the browser that the <strong>small</strong>
                        is associated with the <strong>h1</strong>
                    </p>
                    <p>
                        In HTML5, each piece of sectioned content has its own self-contained
                        outline. This means you wont need to worry as much about which level
                        heading tag to use. You can use an <strong>h1</strong> inside a section and
                        it will be treated as the heading of the section, and have lesser semantic
                        impact than an <strong>h1</strong> that is at a higher level.
                    </p>
                    <p>
                        <strong>Forms</strong>
                    </p>
                    <p>
                        HTML 5 adds several new
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input">
                            <strong>form attributes</strong>
                        </a>
                        that prove quite useful, even if some are as yet poorly supported.
                    </p>
                    <ul>
                        <li>
                            <strong>placeholder="value"</strong>
                            : prepopulates field with data
                        </li>
                        <li>
                            <strong>autofocus="autofocus"</strong>
                            : sets the input to have cursor focus
                        </li>
                        <li>
                            <strong>required="required"</strong>
                            : ensures field is filled in before submission
                        </li>
                        <li>
                            There are also several new <strong>&lt;input&gt;</strong> type
                            attribute variants:
                        <ul>
                            <li>
                                <strong>type="email"</strong>
                                : checkes for the pattern of emails
                            </li>
                            <li>
                                <strong>type="url"</strong>
                                : web addesses
                            </li>
                            <li>
                                <strong>type="date"</strong>
                                : calendar popup
                            </li>
                            <li>
                                <strong>type="tel"</strong>
                                : telephone numbers
                            </li>
                            <li>
                                <strong>type="search"</strong>
                                : formats text input as search input
                            </li>
                            <li>
                                <strong>type="color"</strong>
                                : color picker popup
                            </li>
                            <li>
                                <strong>type="range"</strong>
                                : sliding scales
                            </li>
                            <li>
                                <strong>type="pattern"</strong>
                                : regular expression pattern matching
                            </li>
                        </ul></li>
                    </ul>
                    <p>
                        <strong>Scaleable Vector Graphics</strong>
                    </p>
                    <p>
                        <a href="http://www.w3.org/Graphics/SVG/">
                            <strong>Scaleable Vector Graphics (SVG)</strong>
                        </a>
                        can be embedded into HTML5 documents. SVG are 100% scalable without the
                        pixelated effect that scaled raster images can suffer from. SVG file data
                        is stored as text, so they are much smaller in file size than a raster
                        equivalent.
                    </p>
                    <p>
                        You can use SVG graphics with the <strong>img</strong> tag, just as with
                        raster graphics. You can also use .svg as a CSS <strong>background-image</strong>.
                    </p>
                    <p>
                        <strong>&lt;img src="images/logo.svg" alt="COMP 1950 logo" /&gt;</strong>
                    </p>
                    <p>
                        The <strong>png</strong> on the left is 26KB. The <strong>.svg</strong> on
                        the right is only 4KB.
                    </p>
                    <p><img class="tabbed" src="images/lesson2/comp1950_logo.png" alt="COMP 1950 png logo"> <img class="tabbed" src="images/lesson2/comp1950_logo.svg" alt="COMP 1950 svg logo"></p>
                    <p>
                        Alternatively, you can use SVG code 'inline' with the <strong>svg</strong>
                        tag. The advantage of doing this is it will result in one less
                        request/response between the client and the server. The disadvantage to
                        inline SVG is that it adds considerable clutter to your your<strong>.html</strong> code. Just copy
                        the source code from your<strong>.svg</strong> file and paste it directly into your <strong>.html</strong>!
                    </p>
                    <p>
                        <strong>&lt;svg viewBox="0 0 55 28"&gt;</strong>
                    </p>
                    <p>
                        <strong>
                            &lt;!-- svg code goes here... sometimes there is a LOT of code here!
                            --&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>&lt;/svg&gt;</strong>
                    </p>
                    <p>
                        <strong>SVG Tools</strong>
                    </p>
                    <p>
                        Use an SVG application to help you create and manipulate your SVG code.
                    </p>
                    <ul>
                        <li>
                            <a href="http://www.adobe.com/ca/products/illustrator.html">
                                <strong>Adobe Illustrator</strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://inkscape.org/en/"><strong>Inkscape</strong></a>
                            (Open source, Windows/Mac/Linux)
                        </li>
                    </ul>
                    <p>
                        <strong>Multimedia</strong>
                    </p>
                    <p>
                        HTML5's more responsive multimedia features have made it easier to provide
                        appropriately formatted video and audio to the client.
                    </p>
                    <p>
                        <strong>Audio</strong>
                    </p>
                    <p>
                        The
                        <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/audio">
                            <strong>audio</strong>
                        </a>
                        element provides a way to offer many audio formats to the client, allowing
                        the browser to choose the one most suitable.
                    </p>
                    <p>
                        The most common audio formats for the web are: <strong>audio/mp3</strong>, <strong>audio/mpeg</strong>
                        and <strong>audio/ogg</strong>.
                    </p>
                    <p>
                        <strong>Each audio tag may contain:</strong>
                    </p>
                    <ul>
                        <li>
                            <strong>source</strong>
                            tags as children of the <strong>audio</strong> tag, one for each audio
                            format available. Each <strong>source</strong> must have a <strong>src</strong> (path to audio
                            file) and <strong>type</strong>
                            (audio file MIME type)
                        </li>
                        <li>
                            <strong>controls="controls"</strong>
                            give the user control over the audio *important for usability*
                        </li>
                        <li>
                            <strong>loop="loop"</strong>
                            loop audio playback
                        </li>
                        <li>
                            <strong>preload="none"</strong>
                            dont load the audio until the user clicks 'play', <strong>preload="metadata"</strong> preloads
                            the clip duration
                            statistic only, <strong>preload="auto"</strong> loads the audio clip to
                            the client before they click 'play'
                        </li>
                        <li>
                            <strong>autoplay="autoplay"</strong>
                            begin playing audio as soon as page is loaded *NOT very user friendly*
                        </li>
                        <li>
                            you may also wish to include a direct link for your users to download
                            the file
                        </li>
                    </ul>
                    <p>
                        <strong>&lt;audio controls="controls"&gt;</strong>
                    </p>
                    <p>
                        <strong>
                            &lt;source src="media/house-a-square.mpg" type="audio/mpeg" /&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>
                            &lt;source src="media/house-a-square.mp3" type="audio/mp3" /&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>
                            &lt;source src="media/house-a-square.ogg" type="audio/ogg" /&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>&lt;/audio&gt;</strong>
                    </p>
                    <audio controls="controls">
                    <source src="media/house-a-square.mp3" type="audio/mp3"/>
                    </audio>
                    <p>
                        <a href="http://bcitcomp.ca/1950/media/house-a-square.mp3">
                            <strong>Download the audio</strong>
                        </a>
                    </p>
                    <p>
                        <strong>Video</strong>
                    </p>
                    <p>
                        The
                        <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/video">
                            <strong>video</strong>
                        </a>
                        element provides a way to offer many video formats to the client, allowing
                        the browser to choose the one most suitable.
                    </p>
                    <p>
                        The most common video formats for the web are: <strong>video/mp4</strong>, <strong>video/ogg</strong>
                        and <strong>video/webm</strong>.
                    </p>
                    <p>
                        <strong>Each video tag may contain:</strong>
                    </p>
                    <ul>
                        <li>
                            <strong>source</strong>
                            tags as children of the <strong>video</strong> tag, one for each video
                            format available. Each <strong>source</strong> must have a <strong>src</strong> (path to video
                            file) and <strong>type</strong>
                            (video file MIME type)
                        </li>
                        <li>
                            <strong>controls="controls"</strong>
                            give the user control over the video playback *important for usability*
                        </li>
                        <li>
                            <strong>width="250" height="100"</strong>
                            set the size of the video (use CSS instead. absolute values only, no
                            percentages)
                        </li>
                        <li>
                            <strong>poster="image.jpg"</strong>
                            display a static image when the video is not playing
                        </li>
                        <li>
                            <strong>loop="loop"</strong>
                            loop playback
                        </li>
                        <li>
                            <strong>muted="muted"</strong>
                            begin with audio silenced
                        </li>
                        <li>
                            <strong>preload="none"</strong>
                            dont load the video until the user clicks 'play', <strong>preload="metadata"</strong> preloads
                            the clip duration
                            statistic only, <strong>preload="auto"</strong> loads the clip to the
                            client before they click 'play'
                        </li>
                        <li>
                            <strong>autoplay="autoplay"</strong>
                            begin playing video as soon as page is loaded *NOT very user friendly*
                        </li>
                        <li>
                            you may also wish to include a direct link for your users to download
                            the file
                        </li>
                    </ul>
                    <p>
                        <strong>&lt;video preload="none" </strong>
                    </p>
                    <p>
                        <strong> controls="controls" </strong>
                    </p>
                    <p>
                        <strong> poster="media/poster-bear-in-water.jpg"&gt;</strong>
                    </p>
                    <p>
                        <strong> </strong>
                    </p>
                    <p>
                        <strong>
                            &lt;source src="media/bear-in-water.webm" type="video/webm" /&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>
                            &lt;source src="media/bear-in-water.mp4" type="video/mp4" /&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>
                            &lt;source src="media/bear-in-water.ogg" type="video/ogg" /&gt;
                        </strong>
                    </p>
                    <p>
                        <strong>&lt;/video&gt; </strong>
                    </p>
                    <video preload="none" controls="controls" poster="images/lesson2//poster-bear-in-water.jpg">
	                <source src="media/bear-in-water.mp4" type="video/mp4" />
                    </video>
                    <p>
                        <a href="http://bcitcomp.ca/1950/media/bear-in-water.mp4">
                            <strong>Download the video</strong>
                        </a>
                    </p>
                    <p>
                        <strong>HTML5 Today</strong>
                    </p>
                    <p>
                        User agent browsers will have varying support for the HTML5 specification.
                    </p>
                    <ul>
                        <li>
                            <a href="https://caniuse.com/"><strong>caniuse.com</strong></a>
                            is an excellent source for compatibility testing
                        </li>
                        <li>
                            Try the <a href="http://html5test.com/"><strong>HTML5Test</strong></a>
                            to test a specific browser.
                        </li>
                        <li>
                            To ensure early versions of Internet Explorer will render HTML5 tags
                            correctly, you can add the HTML5 shiv:
                        <ul>
                            <li>
                                <strong>
                                    &lt;script&gt;document.createElement("article");&lt;/script&gt;
                                </strong>
                            </li>
                            <li>
                                This creates an element called <strong>&lt;article&gt;</strong>
                                which the browser (IE, in this case) can understand and style
                                appropriately
                            </li>
                        </ul></li>
                        <li>
                            Creating an entry for every element can get a bit heavy, so you can use
                            the
                            <a href="https://github.com/aFarkas/html5shiv">
                                <strong>HTML5shiv</strong>
                            </a>
                            script written by <a href="http://remysharp.com/"><strong>Remy Sharp</strong></a>. Insert
                            a coded-comment that will apply the shiv ONLY with IE browsers earlier
                            than version 9:
                        </li>
                        <li>
                            <strong>&lt;!--[if lt IE 9]&gt;</strong>
                        </li>
                        <li>
                            <strong>
                                &lt;script
                                src="http://html5shiv.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;
                            </strong>
                        </li>
                    </ul>
                    <p>
                        <strong>&lt;![endif]--&gt;</strong>
                    </p>
                    <ul>
                        <li>
                            Since HTML5 understands both HTML4 and XHTML tags, converting an older
                            HTML file into HTML5 is simply a matter of updating the DOCTYPE and
                            meta tag for charset.
                        </li>
                    </ul>
                    <p>
                        <strong>To Do</strong>
                    </p>
                    <ul>
                        <li>
                            Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/"><strong>D2L</strong></a>
                        </li>
                        <li>
                            Review the
                            <a href="http://bcitcomp.ca/1950/lecture/02/#semantics">
                                <strong>HTML5 semantic tags</strong>
                            </a>
                            , know how and when to use them to maxmize the semantic strucure of
                            your HTML
                        </li>
                    </ul>
                </section>
            </main>

            <?php include "./templates/footer.php"?>

        </div>
        <script>

            const body = document.body;
            const btn = document.getElementById('side-nav-button');

            btn.addEventListener('click', function () {

                body.classList.toggle('show');

            });

        </script>
        <?php include "./templates/scripts.php"?>
    </body>
</html>