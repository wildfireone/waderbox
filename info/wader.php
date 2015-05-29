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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
    <h1>Installing<i class="vaderimg"></i>WADERbox </h1>

</section>


<article>
    <div class="container">
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>What is WADERbox</h2>
                <p>WADERbox (Web Application Development Environment @RGU) is a virtual server that is fully set up for basic web development. It has a fully functioning LAMP (Linux, Apache, MySql and PHP) Stack along with some other helper tools such as GIT and Memcache pre installed.</p>
                <p>The benefit of using a common development environment is that we all know our code will be running on the same system. For example if you run files locally they may be dependant on th local setup. Alternatively if you buy server space online it will have a specific set of capabilities that may be different than another provider, this causes huge problem if you want to share your code (or submit it for a coursework) as it becomes very difficult to determine if failures are due to a different test environment or the code its self. </p>
                <p>This page will show you how to install WADERbox, using vagrant and virtualbox</p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Installing Vagrant</h2>
                <h3>Installing VirtualBox</h3>
                <p>Before we install vagrant we need to install a virtual machine provider, there are a number of these, including VMWare and Windows Hyper-V. We are going to use VirtualBox for no other reason than it is free.</p>
                <p>To install VirtualBox, go to <a href="https://www.virtualbox.org/wiki/Downloads">Virtualbox.org</a> and follow the appropriate instructions for your operating system. For windows just download the executable and run it. You can safely install virtual box using the default settings. Note: You do need to restart when it asks you to. </p>
                <h3>Installing Vagrant</h3>
                <p>Vagrant is a management system for virtual machines, it allows us to share development environments easily through <b>Vagrant files</b> </p>
                <p><a href="https://www.vagrantup.com/downloads.html">Vagrantup.com</a> has all the downloads needed for different operating systems, simply download the appropriate installer for your OS.</p>
                <p>On windows just run the executable and follow the onscreen instructions using the default setup</p>
                <p>Vagrant isn't really an application, its a management system. As such it doesn't run in a window, instead we use it from the command prompt</p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Setting up your WADERbox</h2>
                <p>Directories, like folders on a Macintosh, are used to group files together in a hierarchical structure.</p>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.13/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>