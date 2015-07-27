<!doctype html>
<!-- this index page was developed by wildfireone for the RGU Waderbox.
It is heavily :) based on the excellent ScotchBox at scotch.io -->
<head>

    <!-- Meta -->
    <meta charset="utf-8">

    <title>WADERBOX Virtual Application Development Environment at RGU</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Favicons -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="http://www.rgu.ac.uk/favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https:///maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        ::selection {
            background: #000;
            color: #fff;
        }
        ::-moz-selection {
            background: #000;
            color: #fff;
        }
        body {
            font-family: 'Pathway Gothic One', sans-serif;
            height: 2000px;
        }
        a {
            -webkit-transition: all 310ms ease;
            -moz-transition: all 310ms ease;
            transition: all 310ms ease;
            text-decoration: none !important;
        }
        section {
            position: relative;
        }
        #topper {
            margin-top: 51px;
            height: 250px;
            text-align: center;
        }
        #topper svg {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        #topper h1 {
            position: absolute;
            color: #000;
            left: 50%;
            top: 50%;
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 50px;
            text-transform: uppercase;
        }
        #topper p {
            position: absolute;
            font-size: 30px;
            text-transform: uppercase;
            top: 85%;
            left: 50%;
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        #topper h3 {
            position: absolute;
            font-size: 30px;
            text-transform: uppercase;
            top: 15%;
            left: 50%;
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        #topper h1 i {
            color: rgb(0, 157, 157);
        }
        article {
            padding: 50px 0;
        }
        article table {
            background: #e3e3e3;
        }
        article .content .wrap {
            background: #ffffff;
            margin-bottom: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        article .content .wrap h2 {
            margin: 10px 0 15px;
            color: #8f19ff;
        }
        article .content p {
            font-size: 20px;
        }
        article .content .wrap td {
            font-size: 20px;
        }
        article .fa-times {
            color: rgb(255, 69, 69);
        }
        article .fa-check {
            color: rgb(0, 179, 64);
        }
        #site-footer {
            background: #05003D;
            padding: 100px 0;
            color: #e3e3e3;
            font-size: 35px;
        }
        #site-footer i {
            font-size: 20px;
        }

        .vaderimg {
            background-size: 100px 100px;
            background: url(Darth-Wader.png) no-repeat;
            display: block;
            width:100px;
            height:100px;
            float:left;
        }
    </style>

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://127.0.0.1:8000/info/index.php">WaderBox</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="http://www.comp.rgu.ac.uk/">CSDM @ RGU</a></li>
                <li><a href="https://github.com/webdevexamples">GitHub</a></li>
                <li><a href="http://127.0.0.1:8000/info/info.php">Info</a></li>
            </ul>
        </div>
    </div>
</div>

<section id="topper" style="background-image: url('data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns="http://www.w3.org/2000/svg" version="1.1"><defs id="defs4"><filter color-interpolation-filters="sRGB" id="filter3115"><feTurbulence type="fractalNoise" numOctaves="1" baseFrequency="0.9" id="feTurbulence3117"/><feColorMatrix result="result5" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 6 -4.15 " id="feColorMatrix3119"/><feComposite in2="result5" operator="in" in="SourceGraphic" result="result6" id="feComposite3121"/><feMorphology in="result6" operator="dilate" radius="2" result="result3" id="feMorphology3123"/></filter></defs><rect width="100%" height="100%" x="0" y="0" id="rect2985" style="fill:#ff84ff;filter:url(#filter3115)"/></svg>'); ?>');">
    <h1>UNIX <i class="vaderimg"></i> Commands </h1>

</section>


<article>
    <div class="container">
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h3>Note: not all of these are actually part of UNIX itself, and you may not find them on all UNIX machines. But they can all be used on turing in essentially the same way, by typing the command and hitting return. Note that some of these commands are different on non-Solaris machines - see SunOS differences.
                If you've made a typo, the easiest thing to do is hit CTRL-u to cancel the whole line. But you can also edit the command line (see the guide to More UNIX).
                UNIX is case-sensitive.</h3>

            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Files</h2>
                <ul>
                    <li>ls --- lists your files</li>
                    <li>ls -l --- lists your files in 'long format', which contains lots of useful information, e.g. the exact size of the file, who owns the file and who has the right to look at it, and when it was last modified.</li>
                    <li>ls -a --- lists all files, including the ones whose filenames begin in a dot, which you do not always want to see.</li>
                    <li>There are many more options, for example to list files by size, by date, recursively etc.</li>
                    <li>more filename --- shows the first part of a file, just as much as will fit on one screen. Just hit the space bar to see more or q to quit. You can use /pattern to search for a pattern.</li>
                    <li>emacs filename --- is an editor that lets you create and edit a file. See the emacs page.</li>
                    <li>mv filename1 filename2 --- moves a file (i.e. gives it a different name, or moves it into a different directory (see below)</li>
                    <li>cp filename1 filename2 --- copies a file</li>
                    <li>rm filename --- removes a file. It is wise to use the option rm -i, which will ask you for confirmation before actually deleting anything. You can make this your default by making an alias in your .cshrc file.</li>
                    <li>diff filename1 filename2 --- compares files, and shows where they differ</li>
                    <li>wc filename --- tells you how many lines, words, and characters there are in a file</li>
                    <li>chmod options filename --- lets you change the read, write, and execute permissions on your files. The default is that only you can look at them and change them, but you may sometimes want to change these permissions. For example, chmod o+r filename will make the file readable for everyone, and chmod o-r filename will make it unreadable for others again. Note that for someone to be able to actually look at the file the directories it is in need to be at least executable. See help protection for more details.</li>
                </ul>
                <h3>File Compression</h3>
                <ul>
                    <li>gzip filename --- compresses files, so that they take up much less space. Usually text files compress to about half their original size, but it depends very much on the size of the file and the nature of the contents. There are other tools for this purpose, too (e.g. compress), but gzip usually gives the highest compression rate. Gzip produces files with the ending '.gz' appended to the original filename.</li>
                    <li>gunzip filename --- uncompresses files compressed by gzip.</li>
                    <li>gzcat filename --- lets you look at a gzipped file without actually having to gunzip it (same as gunzip -c). You can even print it directly, using gzcat filename | lpr</li>
                </ul>
                <h3>Printing</h3>
                <ul>
                    <li>lpr filename --- print. Use the -P option to specify the printer name if you want to use a printer other than your default printer. For example, if you want to print double</li>-sided, use 'lpr -Pvalkyr-d', or if you're at CSLI, you may want to use 'lpr -Pcord115-d'. See 'help printers' for more information about printers and their locations.</li>
                    <li>lpq --- check out the printer queue, e.g. to get the number needed for removal, or to see how many other files will be printed before yours will come out</li>
                    <li>lprm jobnumber --- remove something from the printer queue. You can find the job number by using lpq. Theoretically you also have to specify a printer name, but this isn't necessary as long as you use your default printer in the department.</li>
                    <li>genscript --- converts plain text files into postscript for printing, and gives you some options for formatting. Consider making an alias like alias ecop 'genscript -2 -r \!* | lpr -h -Pvalkyr' to print two pages on one piece of paper.</li>
                    <li>dvips filename --- print .dvi files (i.e. files produced by LaTeX). You can use dviselect to print only selected pages. See the LaTeX page for more information about how to save paper when printing drafts.</li>
                </ul>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Directories</h2>
                <p>Directories, like folders on a Macintosh, are used to group files together in a hierarchical structure.</p>
                <ul>
                    <li>mkdir dirname --- make a new directory</li>
                    <li>cd dirname --- change directory. You basically 'go' to another directory, and you will see the files in that directory when you do 'ls'. You always start out in your 'home directory', and you can get back there by typing 'cd' without arguments. 'cd ..' will get you one level up from your current position. You don't have to walk along step by step - you can make big leaps or avoid walking around by specifying pathnames.</li>
                    <li>pwd --- tells you where you currently are.</li>
                </ul>

            </div>
        </div>
    </div>
</article>

<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Aut inveniam cattus aut faciam </p>
                <i>wildfireone for RGU</i>
                <i>Thanks to <a href="http://scotch.io">scotch.io</a> Darth-Wader image from <a href="http://www.yearoftheduck.com/">Year of the Duck</a></i>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>