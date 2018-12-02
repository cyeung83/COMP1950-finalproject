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
                <h1>Lesson 1</h1>
                <h2>Agenda</h2>
                <ul>
                    <li><strong>Introductions</strong></li>
                    <li><strong>Orientation</strong></li>
                    <li><strong>Web development tools</strong></li>
                    <li><strong>Standards based development</strong></li>
                    <li><strong>To Do</strong></li>
                </ul>
                <h2>Introductions</h2>
                <ul>
                    <li>
                        <strong>instructors:</strong>
                        Jeff Parker (
                        <a href="mailto:jeffrey_parker@bcit.ca">
                            <strong>jeffrey_parker@bcit.ca</strong>
                        </a>
                        ), Michael Whyte (
                        <a href="mailto:michael_whyte@bcit.ca">
                            <strong>michael_whyte@bcit.ca</strong>
                        </a>
                        )
                    </li>
                    <li>
                        <strong>web site:</strong>
                        this is it
                    </li>
                    <li>
                        <strong>all about you...</strong>
                    </li>
                    <ul>
                        <li>
                            your name
                        </li>
                        <li>
                            your background
                        </li>
                        <li>
                            what do you hope to achieve in this course? Be specific!
                        </li>
                    </ul>
                </ul>
                <h2>Course Overview</h2>
                <p>
                    Learn more <strong>about the course</strong> to help you determine if this
                    is the right class for you.
                </p>
                <h2>Orientation</h2>
                <h3>Sharefile</h3>
                <p>
                    BCIT lab computers are re-imaged each day. Files you save on the local C:
                    drive of a lab computer will be erased after the computer power is cycled.
                </p>
                <p><strong>Options For Saving Files:</strong></p>
                <ul>
                    <li>
                        Use
                        <a href="http://kb.bcit.ca/sr/sharefile/2052.shtml">
                            <strong>BCIT Sharefile</strong>
                        </a>
                        to save your work
                    </li>
                    <li>
                        Save your work to your personal USB or cloud storage account
                    </li>
                    <li>
                        Use your own laptop in class, and dont use the BCIT lab computers
                    </li>
                </ul>
                <h3>Course Materials</h3>
                <p>
                    COMP 1950 homework assignments, quizzes, in class exercises and example
                    code can be accessed via <a href="https://learn.bcit.ca/"><strong>Desire 2 Learn</strong></a>
                    (D2L).
                    Use your BCIT student number and password to access D2L. Course materials
                    will become avilable as the course progresses. It is your responsibility to
                    log in and download files as they become available.
                </p>
                <p>
                    If you have difficulty gaining access, consult the
                    <a href="https://www.bcit.ca/distance/learnersupport/d2lhelp.shtml">
                        <strong>D2L help documentation</strong>
                    </a>
                    , or contact BCIT Tech help desk at <strong>604-412-7444</strong> (Toll
                    free: <strong>1-800-351-5533</strong>).
                </p>
                <h3>Web space</h3>
                <p>
                    Each student will get a personal webspace where you will publish your
                    homework assignments. This is not a continuation of your COMP1850 site (if
                    you had one). This site is primarily for you to house your exercises,
                    assignments and group work. Make it a site that is usable and functional.
                </p>
                <ul>
                    <li>
                        Your instructor will create webspaces for each of you.
                    </li>
                    <li>
                        Email your instructor this information:
                    </li>
                    <ul>
                        <li>
                            your myBCIT email - eg: yourname123@my.BCIT.ca
                        </li>
                        <li>
                            your student number - eg: A00123456
                        </li>
                        <li>
                            a case sensitive password you will remember - ???
                        </li>
                    </ul>
                    <li>
                        Take the name portion of your <strong>my.bcit.ca</strong> email address
                        and use it at the end of the URL described below (eg: if your email
                        address is '<em>yourname123@my.bcit.ca</em>', your email name is '<em>yourname123</em>', so
                        your
                        url would be ' <em>http://bcitcomp.ca/students/yourname123</em>'
                        <br />
                        For example: <strong>http://bcitcomp.ca/students/your_bcit_email_name</strong>
                    </li>
                </ul>
                <p><strong>Connect to your bcitcomp.ca account via FTP</strong></p>
                <p>
                    Use Filezilla, or any FTP client to connect to bcitcomp.ca. The bcitcomp.ca
                    server provides you with a space on the internet where you can publish your
                    homework and assignments.
                </p>
                <ol>
                    <li>
                        Choose: <strong>File-&gt;SiteManager-&gt;New Site</strong>, then
                        describe the FTP server, eg "bcitcomp.ca"
                    </li>
                    <li>
                        Host: <strong>bcitcomp.ca</strong>
                    </li>
                    <li>
                        Port: <strong>21</strong>
                    </li>
                    <li>
                        User: <strong>{yourBCITStudentNumber}@bcitcomp.ca</strong> (use an
                        uppercase <strong>A</strong> when typing your BCIT student number)
                    </li>
                    <li>
                        Password: <strong>???</strong>
                    </li>
                    <li>
                        Servertype: <strong>FTP</strong> File Transfer Protocol
                    </li>
                    <li>
                        LogonType: <strong>Normal</strong>
                    </li>
                    <li>
                        Click: <strong>Connect</strong>
                    </li>
                    <li>
                        If you experience connectivity problems, re-check your input, or ask
                        your instructor for assistance.
                    </li>
                </ol>
                <p>
                    <img src="images/lesson1/filezilla_screenshot.png">
                </p>
                <h2>Tools</h2>
                <h3>Visual Studio Code</h3>
                <p>
                    There are several development tools to choose from. In COMP 1950 we will
                    use the open source Integrated Devlopment Environment (IDE) from Microsoft
                    called
                    <a href="https://code.visualstudio.com/">
                        <strong>Visual Studio Code</strong>
                    </a>
                    (VS Code). This is more than a simple text editor, it provides robust code
                    editing, maintenance and testing features, as well as supporting plugins to
                    further increase it's capabilities.
                </p>
                <p>
                    <strong>Lab Computers</strong>
                </p>
                <p>
                    VS Code should already be installed on COMP1950 lab computers. The
                    executable is found at <strong>C:/Program Files/Microsoft VS Code/Code.exe</strong>
                </p>
                <p>
                    <strong>Laptop / Home Desktop</strong>
                </p>
                <p>
                    <a href="https://code.visualstudio.com/#alt-downloads">
                        <strong>Download VS Code</strong>
                    </a>
                    for Windows, Mac or Linux.
                </p>
                <p>
                    <strong>Exploring VS Code</strong>
                </p>
                <p>
                    Your instructor will demonstrate some of it's capabilities in class. On
                    your own time, you may wish to review the
                    <a href="https://code.visualstudio.com/docs">
                        <strong>help documentation</strong>
                    </a>
                    'Get Started' section to give yourself a better understanding of some of
                    the basic features and functions provided by VS Code.
                </p>
                <ul>
                    <li>
                        <a href="https://code.visualstudio.com/docs/introvideos/basics">
                            <strong>Setup and basics of VS Code</strong>
                        </a>
                    </li>
                    <li>
                        <a href="https://code.visualstudio.com/docs">
                            <strong>VS Code help documentation</strong>
                        </a>
                    </li>
                </ul>
                <h3>Browser-based development</h3>
                <p>
                    There are three major web browser platforms to consider:
                </p>
                <ul>
                    <li>
                        <a href="https://www.mozilla.org/en-US/"><strong>Mozilla</strong></a>
                    </li>
                    <ul>
                        <li>
                            This is the platform that
                            <a href="https://www.mozilla.org/en-US/firefox/">
                                <strong>Firefox</strong>
                            </a>
                            runs on
                        </li>
                        <li>
                            Mozilla Foundation's web platform created by web developers
                        </li>
                        <li>
                            Gecko rendering engine: fast and progressive
                        </li>
                        <li>
                            Excellent level of standards compliance
                        </li>
                        <li>
                            Corporate independence
                        </li>
                        <li>
                            No built-in development tools
                        </li>
                        <li>
                            Plethora of add-ons that make web development easy
                        </li>
                        <li>
                            Add-ons have a downside: bloat
                        </li>
                    </ul>
                    <li>
                        <a href="http://www.webkit.org/"><strong>WebKit</strong></a>
                    </li>
                    <ul>
                        <li>
                            This is the platform that gives us<a href="http://www.google.com/chrome"><strong>Chrome</strong></a>,
                            <a href="http://www.apple.com/safari/"><strong>Safari</strong></a>
                            and <a href="http://www.opera.com/"><strong>Opera</strong></a>,
                            with a few other smaller browsers out there as well.
                        </li>
                        <li>
                            Excellent platform that is very fast and standards compliant
                        </li>
                        <li>
                            Third parties can download the source, make local adjustments and
                            release their own version, as Google and Apple have both done
                        </li>
                        <li>
                            Standalone version can be downloaded at any time for the latest
                            release
                        </li>
                        <li>
                            Development is done via the built-in Developer Tools
                        </li>
                        <li>
                            Initially a thin environment, recent releases have made
                            Webkit-based browsers excellent for developers
                        </li>
                        <li>
                            Macintosh based developers may need to
                            <a href="http://www.jonhartmann.com/index.cfm/2011/4/28/Enabling-Safari-Developer-Tools">
                                <strong>enable web developer options</strong>
                            </a>
                            in Safari before accessing the developer tools
                        </li>
                    </ul>
                    <li>
                        <a href="https://www.microsoft.com/en-ca/">
                            <strong>Microsoft</strong>
                        </a>
                    </li>
                    <ul>
                        <li>
                            The vendor for
                            <a href="https://www.microsoft.com/en-ca/windows/microsoft-edge">
                                <strong>Edge</strong>
                            </a>
                            and
                            <a href="https://www.microsoft.com/en-ca/download/internet-explorer.aspx">
                                <strong>Internet Explorer</strong>
                            </a>
                        </li>
                        <li>
                            Microsoft's Edge is a major improvement on it's previous browser
                            offerings.
                        </li>
                        <li>
                            Edge offers very good standards compliance and browser tools.
                        </li>
                        <li>
                            Do <strong>NOT</strong> use Internet Explorer as your development
                            browser. It is one the least standards compliant of the browsers.
                            It is also no longer supported with updates.
                        </li>
                    </ul>
                </ul>
                <p>
                    Remember to test your work in as many browsers as you can! <a href="http://browsershots.org/"><strong>BrowserShots</strong></a>
                    allows
                    you to do basic testing for earlier versions of Chrome, Firefox, Safari,
                    and Opera. If you need to test for early iterations of IE, try: <a href="http://netrenderer.com/"><strong>Netrenderer</strong></a>
                </p>
                <h3>Extensions</h3>
                <p>
                    Extensions can add more functionality and features to your development
                    browser.
                </p>
                <p>
                    The
                    <a href="http://chrispederick.com/work/web-developer/">
                        <strong>Web Developer Toolbar</strong>
                    </a>
                    is available for Chrome, Firefox and Opera. Some useful features include:
                </p>
                <ul>
                    <li>
                        Disable styles - by embedded/linked/inline as well as all styles, or
                        just a single sheet
                    </li>
                    <li>
                        Edit CSS &amp; HTML - Make live changes to your CSS or HTML!
                    </li>
                    <li>
                        Images - outlining, file sizes, alt information... lots more
                    </li>
                    <li>
                        Form detail - useful for working with form elements
                    </li>
                    <li>
                        Cookie examination and manipulation
                    </li>
                    <li>
                        Built in validators
                    </li>
                    <li>
                        Line Guides &amp; Rulers
                    </li>
                    <li>
                        Element inspector
                    </li>
                </ul>
                <p>
                    Search online to see what is available for your development browser:
                </p>
                <ul>
                    <li>
                        Ad blockers
                    </li>
                    <li>
                        Password managers
                    </li>
                    <li>
                        Drawing on HTML pages
                    </li>
                    <li>
                        Text to speech
                    </li>
                    <li>
                        Etc, etc!
                    </li>
                </ul>
                <p>
                    <strong>Browser Based Diagnostic Tools</strong>
                </p>
                <p>
                    As web pages get more complex, it can become difficult figuring out what is
                    going on. For example, CSS rules that override other CSS rules, if spread
                    across several files, can be challenge to make sense of. Having a
                    diagnostic tool to assist in developing will make it easier to examine
                    every detail of web pages.
                </p>
                <p>
                    Most modern browsers have some kind of development environment that can be
                    turned on or triggered via extensions and/or plug-ins.
                </p>
                <p>
                    <strong>Web Browser Tools</strong>
                </p>
                <ul>
                    <li>
                        <a href="https://developer.mozilla.org/son/docs/Tools">
                            <strong>Firefox</strong>
                        </a>
                    </li>
                    <li>
                        <a href="https://developers.google.com/chrome-developer-tools/">
                            <strong>Chrome</strong>
                        </a>
                    </li>
                    <li>
                        <a href="https://developer.apple.com/safari/tools/">
                            <strong>Safari</strong>
                        </a>
                    </li>
                    <li>
                        <a href="https://docs.microsoft.com/en-us/microsoft-edge/f12-devtools-guide">
                            <strong>Edge</strong>
                        </a>
                    </li>
                </ul>
                <p>
                    Get familiar with using one of these tools. They are invaluable for
                    understanding code and for finding, diagnosing, and fixing problems with
                    code. You will be required to use them in the classes ahead. Practice
                    adding/editing/removing both HTML and CSS using your development browser's
                    built in tools.
                </p>
                <p>
                    <strong>Typical Features</strong>
                </p>
                <ul>
                    <li>
                        <strong>F12</strong>
                        key will toggle open/close the tools in most browsers
                    </li>
                    <li>
                        The <strong>Elements</strong>/<strong>Inspector</strong> tab provides
                        an overview of the HTML and CSS
                    </li>
                    <li>
                        The <strong>Select</strong> tool can be used to analyze the structure
                        of the page and understand he status of box models
                    </li>
                    <li>
                        The <strong>Console</strong> will display Javascript behaviours and
                        error messages
                    </li>
                </ul>
                <p>
                    <strong>NOTE:</strong>
                    changes you make with the tool are <strong>client based</strong>, and do
                    not affect the server side HTML/CSS files. Client side changes made with
                    this tool are temporary (they will be lost upon page refresh).
                </p>
                <p>
                    The capabilities of these browser tools go well beyond outlining, examining
                    and editing. They provide deep troubleshooting capabilities of the HTTP
                    network, javascript and even XHR (XMLHttpRequest).
                </p>
                <h2>>Standards</h2>
                <h3>W3C</h3>
                <p>
                    Just as those who manufacture physical goods are expected to follow the
                    <a href="http://www.iso.org/">
                        <strong>International Organization for Standards (ISO)</strong>
                    </a>
                    , web developers are expected to adhere to the standards described by the
                    <a href="http://www.w3.org/">
                        <strong>World Wide Web Consortium (W3C)</strong>
                    </a>
                </p>
                <p>
                    <strong>W3C: World Wide Web Consortium</strong>
                </p>
                <ul>
                    <li>
                        Web standards have gone through the same process that the ISO went
                        through
                    </li>
                    <li>
                        Many companies see the benefits of interoperability - a few are still
                        "forging their own"
                    </li>
                    <li>
                        Many companies have standards: Adobe, Microsoft, Apple, Ford, GM
                    </li>
                    <li>
                        Many are proprietary standards, and are not supported by other
                        companies
                    </li>
                    <li>
                        W3C - World Wide Web Consortium: founded by Tim Berners-Lee to try and
                        uniformly put forward standards through a single communication vehicle
                    </li>
                    <li>
                        Leading browser makers did not follow, initially
                    </li>
                    <li>
                        Designers were 'taking sides' in the browser wars: users were losers
                    </li>
                    <li>
                        Most modern browsers are fairly standards compliant
                    </li>
                </ul>
                <p>
                    <strong>W3C Goals</strong>
                </p>
                <ol>
                    <li>
                        <strong>Universal Access</strong>
                        : To make the Web accessible to all by promoting technologies that take
                        into account the vast differences in culture, languages, education,
                        ability, material resources, access devices, and physical limitations
                        of users on all continents;
                    </li>
                    <li>
                        <strong>Semantic Web</strong>
                        : To develop a software environment that permits each user to make the
                        best use of the resources available on the Web;
                    </li>
                    <li>
                        <strong>Web of Trust</strong>
                        : To guide the Web's development with careful consideration for the
                        novel legal, commercial, and social issues raised by this technology.
                    </li>
                </ol>
                <p>
                    Why web developers should follow W3C standards:
                </p>
                <ul>
                    <li>
                        Your pages will be viewable in the largest number of browsers
                    </li>
                    <li>
                        Increase interoperability with other clients (search engines, screen
                        readers)
                    </li>
                    <li>
                        Web sites will gracefully degrade as support for CSS or other
                        presentation layers are absent.
                    </li>
                    <li>
                        Code that doesn't follow standards cannot be expected to behave
                        predictably in the various web browsers
                    </li>
                    <li>
                        Non standard code is hard to support
                    </li>
                    <li>
                        Re-engineering and/or maintaining poorly coded websites can be very
                        difficult, costly and time consuming
                    </li>
                </ul>
                <p>
                    <strong>Discussion:</strong>
                </p>
                <ul>
                    <li>
                        What is the current W3C recommended version for HTML?
                    </li>
                    <li>
                        What is the current W3C recommended version for CSS?
                    </li>
                    <li>
                        What are the consequences of using a non-standard version?
                    </li>
                </ul>
                <p>
                    Learn more abou the W3C and standards based devlopment from the
                    <a href="http://www.webstandards.org/learn/faq/">
                        <strong>Web Standards Project</strong>
                    </a>
                    .
                </p>
                <h3>Web Development</h3>
                <p>
                    <strong>Three goals of standards-driven web development:</strong>
                </p>
                <ol>
                    <li>
                        Compatibility (creating web pages that work well in all browsers)
                    </li>
                    <li>
                        Portability (writing code that works well in any computing
                        environment/operating system)
                    </li>
                    <li>
                        Accessibility (produce web pages that are optimized for search engines,
                        screen readers, etc)
                    </li>
                </ol>
                <p>
                    <strong>Requirements</strong>
                </p>
                <ul>
                    <li>
                        HTML + CSS + DOM = Agile Web Sites
                    </li>
                    <li>
                        Structurally valid HTML code (eg: tags that open are closed.
                        parent-child tag relationships are valid, etc)
                    </li>
                    <li>
                        Logically valid HTML code (eg: ids are not applied more than once per
                        page)
                    </li>
                    <li>
                        Syntactically valid CSS code
                    </li>
                    <li>
                        Use external CSS to develop sites that separate content (HTML) from
                        presentation (CSS)
                    </li>
                    <li>
                        Using Semantic Markup to establish content relationships and logical
                        deployment of content
                    </li>
                    <li>
                        Use a single codebase (no browser sniffing, forked code)
                    </li>
                    <li>
                        Consider special needs users with screen readers. A common browser used
                        with screen reader software is <a href="http://www.webbie.org.uk/"><strong>Webbie</strong></a>
                    </li>
                </ul>
                <h3>File and Folder Naming</h3>
                <p>
                    HTTP urls cannot contain certain characters, and certain characters will
                    cause unwanted effects and behaviours when used in a url. Follow best
                    practices for all file and folder names:
                </p>
                <ul>
                    <li>
                        File and folder names should <strong>NOT</strong> contain:
                    </li>
                    <ul>
                        <li>
                            Capital letters
                        </li>
                        <li>
                            Spaces
                        </li>
                        <li>
                            Special characters:
                            <strong>
                                ! @ # $ % ^ &amp; * ( ) + { } [ ] : ; " &lt; &gt; ? |
                            </strong>
                            etc...
                        </li>
                    </ul>
                    <li>
                        Acceptable non-alphanumeric characters: <strong>. _ - ~</strong>
                    </li>
                    <li>
                        Filenames should either be descriptive of the file contents, or use the
                        default page name: <strong>index.htm</strong>, <strong>index.html</strong> or <strong>index.shtml</strong>
                        (or
                        whatever your server default is)
                    </li>
                    <li>
                        Folder names should always be descriptive. Folder structure should be
                        logical (eg: <strong>/hockey/nhl/canucks</strong>).
                    </li>
                </ul>
                <h3>File Management</h3>
                <ul>
                    <li>
                        Including an <strong>index.html</strong> file in every folder on your
                        server will ensure users cannot go snooping around your filesystem. the
                        index.html file can be a blank HTML page if you like, as long as the
                        user does not see a list of files when they request a folder
                    </li>
                    <li>
                        Browser caching can reduce excessive request/response transactions
                        between client and server. however, some browsers may cache things like
                        the CSS, so if the styles have changed since caching the client may not
                        get the latest styles.
                    </li>
                    <ul>
                        <li>
                            <strong>Ctrl + F5</strong>
                            (<strong>Cmd + F5</strong> for Mac) will force a page reload. Very
                            useful when developing on a localhost http server.
                        </li>
                        <li>
                            If a file name has changed, the browser will have to make a new
                            request from the server. versioning your file names will ensure
                            users always have the latest version of any file (for example
                            <strong>
                                styles_1.0.css, styles_1.1.css, styles_1.2.css, styles_2.0.css
                            </strong>
                            etc)
                        </li>
                    </ul>
                    <li>
                        If there are files/pages on your server no longer being used, be sure
                        to either remove them or locate them in a place where users are not
                        going to accidentally find them
                    </li>
                </ul>
                <h3>Code Style and Organization</h3>
                <p>
                    In COMP1950 students are expected to present a readable, well organized
                    code style:
                </p>
                <ul>
                    <li>
                        Comment <strong>all code</strong> with your name (or nickname if you
                        prefer). Do this for all text based files (<strong>.html</strong>, <strong>.css</strong>,
                        <strong>.js</strong>,
                        <strong>.php</strong>,
                        etc)
                        <br />
                        <img src="images/lesson1/css_commenting1.png">
                        <br />
                        <img src="images/lesson1/css_commenting2.png">
                    </li>
                    <li>
                        In HTML, use carriage return and tabs to indicate parent-child tag
                        relationships. Likewise, code your CSS to make it easy to see which
                        rules are applied to each selector.
                        <br />
                        <img src="images/lesson1/css_commenting3.png">
                    </li>
                    <li>
                        Separate different file types into folders. At minimum, keep all
                        non-html files in their own folder. If you like you can make a
                        dedicated 'html' folder for your <strong>.html</strong> files as well.
                        <br />
                        <img src="images/lesson1/folder_structure.png">
                    </li>
                    <li>
                        Use the <strong>.html</strong> extension for all HTML files (not <strong>.htm</strong>). Use
                        the
                        typical extension for all other text
                        based files.
                    </li>
                    <li>
                        Write structurally valid HTML code:
                        <a href="http://validator.w3.org/">
                            <strong>W3C HTML validator</strong>
                        </a>
                    </li>
                    <li>
                        Write syntactically valid CSS code:
                        <a href="http://jigsaw.w3.org/css-validator/">
                            <strong>W3C CSS validator</strong>
                        </a>
                    </li>
                    <li>
                        Include a
                        <a href="http://validator.w3.org/check?uri=referer">
                            <strong>referer link</strong>
                        </a>
                        on all your HTML pages:
                        <br />
                        <strong>
                            &lt;a
                            href="http://validator.w3.org/check?uri=referer"&gt;validate&lt;/a&gt;
                        </strong>
                    </li>
                </ul>
                <p>
                    <strong>Semantic Markup</strong>
                </p>
                <p>
                    Highly
                    <a href="https://html.com/semantic-markup/">
                        <strong>semantic HTML content</strong>
                    </a>
                    is crucial for usability, accessibilty and search engine optimization.
                </p>
                <p>
                    <strong>What is Semantic Markup?</strong>
                </p>
                <ul>
                    <li>
                        The practice of organizing your content into a structured hierarchy
                    </li>
                    <li>
                        Using appropriate tags to explain and describe the content
                    </li>
                    <li>
                        H1 ... 6 tags for summary headings
                    </li>
                    <li>
                        UL tags for unsorted, unranked, related points
                    </li>
                    <li>
                        OL tags for sorted, ranked, related points
                    </li>
                    <li>
                        Paragraph tags instead of double BR tags
                    </li>
                    <li>
                        HTML tables used for semantic value (tabular data), not for layouts
                    </li>
                    <li>
                        <strong>IMPORTANT</strong>
                        : Separate Content (HTML) from Presentation (CSS)
                    </li>
                </ul>
                <p>
                    <strong>Building Content Relationships</strong>
                </p>
                <ul>
                    <li>
                        Use appropriate tags for headings, content, sub-content, lists
                    </li>
                    <li>
                        This builds a relationship that descends from the title of the page
                    </li>
                    <li>
                        Each section is a discrete piece of information
                    </li>
                    <li>
                        Headings summarize the following content
                    </li>
                    <li>
                        Citations, quotes, code samples can be contextualized by nearest
                        heading
                    </li>
                </ul>
                <p>
                    <strong>Logical vs. Physical Styles</strong>
                </p>
                <ul>
                    <li>
                        Tend to display identically in browsers, but are fundamentally
                        different
                    </li>
                    <li>
                        Physical styles define what content <em>looks like</em>
                    </li>
                    <li>
                        Logical styles define what content <em>is</em>
                    </li>
                    <li>
                        Logical styles are important for screen readers, physical styles are
                        not
                    </li>
                    <li>
                        Given a choice, logical styles are usually preferred
                    </li>
                    <li>
                        Some physical styles:
                    </li>
                    <ul>
                        <li>
                            <strong>b</strong>
                            - Bold
                        </li>
                        <li>
                            <strong>i</strong>
                            - Italic
                        </li>
                        <li>
                            <strong>s</strong>
                            - Strikethrough
                        </li>
                        <li>
                            <strong>u</strong>
                            - Underline
                        </li>
                    </ul>
                </ul>
                <p>
                    <strong>Logical Styling</strong>
                </p>
                <ul>
                    <li>
                        Best way to markup content for long-term usage
                    </li>
                    <li>
                        Use CSS to change style (and some behaviour)
                    </li>
                    <li>
                        Use DOM to change behaviour (via scripting)
                    </li>
                    <li>
                        Requires thinking ahead
                    </li>
                    <li>
                        Examples of logical styles:
                    </li>
                    <ul>
                        <li>
                            <strong>strong</strong>
                            - <strong>Increase importance</strong>
                        </li>
                        <li>
                            <strong>em</strong>
                            - <em>Add Emphasis</em>
                        </li>
                        <li>
                            <strong>code</strong>
                            - <strong>Code sample</strong>
                        </li>
                        <li>
                            <strong>kbd</strong>
                            - Keyboard entry
                        </li>
                        <li>
                            <strong>samp</strong>
                            - Programming sample
                        </li>
                        <li>
                            <strong>var</strong>
                            - <em>Variable</em>
                        </li>
                        <li>
                            <strong>cite</strong>
                            - <em>Citation</em>
                        </li>
                        <li>
                            <strong>dfn</strong>
                            - <em>Definition</em>
                        </li>
                        <li>
                            <strong>abbr</strong>
                            - Abbreviation
                        </li>
                        <li>
                            <strong>acronym</strong>
                            - Acronym
                        </li>
                        <li>
                            <strong>del</strong>
                            - <del>Deleted text</del>
                        </li>
                        <li>
                            <strong>ins</strong>
                            - <ins>Inserted text</ins>
                        </li>
                    </ul>
                </ul>
                <p>
                    <strong>Key Advantages Of Semantic Content</strong>
                </p>
                <ul>
                    <li>
                        Content is relational - context can be determined easily
                    </li>
                    <li>
                        Extracting important pieces of information is simple (CITE or CODE tags
                        for example)
                    </li>
                    <li>
                        Search engine optimization (SEO)
                    </li>
                    <li>
                        Syndication
                    </li>
                    <li>
                        Big win for frameworks such as jQuery
                    </li>
                    <li>
                        Screen reader friendly
                    </li>
                    <li>
                        Increased Accessibility
                    </li>
                    <li>
                        Separating style (CSS) from structure (HTML), makes it easier to
                        maintain
                    </li>
                </ul>
                <h2>To Do</h2>
                <ul>
                    <li>
                        Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/"><strong>D2L</strong></a>
                    </li>
                    <li>
                        Confirm you have access to your
                        <a href="http://bcitcomp.ca/1950/lecture/01/#student_webspace">
                            <strong>online webspace</strong>
                        </a>
                        and that your FTP credentials are valid
                    </li>
                    <li>
                        Be sure you know how to add/edit/remove HTML and CSS using a browser
                        tool
                    </li>
                    <li>
                        Install VS Code on your home computer or laptop. Explore some of the
                        accompanying help documentation to familiarize yourself with how to
                        code your HTML and CSS using this tool.
                    </li>
                    <ul>
                        <li>
                            <a href="https://code.visualstudio.com/#alt-downloads">
                                <strong>Download VS Code</strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://code.visualstudio.com/docs/introvideos/basics">
                                <strong>Setup and basics of VS Code</strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://code.visualstudio.com/docs">
                                <strong>VS Code help documentation</strong>
                            </a>
                        </li>
                    </ul>
                </ul>
                <p>
                    ...and yes, there will be a practical, open book quiz at the start of
                    session #2! (hint: practice using a browser based diagnostic tool)
                </p>
            </section>
        </main>

        <?php include "./templates/footer.php"?>

    </div>
    <!--
    <script>

        const body = document.body;
        const btn = document.getElementById('side-nav-button');

        btn.addEventListener('click', function () {

            body.classList.toggle('show');

        });

    </script>
    -->
</body>
<?php include "./templates/scripts.php"?>
</html>