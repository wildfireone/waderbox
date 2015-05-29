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
            height: 450px;
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

            font-size: 80px;
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
    <h1><i class="vaderimg"></i>Your<br>WADERbox<br></h1>
    <h3>Web Application Development Environment @ RGU</h3>
    <p>IT'S ALIVE!</p>


</section>

<article>
    <div class="container">
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap ">
                <h2>Viewing your site</h2>
                <p>If you can see this page it means that vagrant is up and running properly and that the virtual server running your site is now active. Horray!</p>
                <p>When vagrant is running you will always be able to view your site at 127.0.0.1:8000, note that you must include the port, the bit after the ":" </p>
                <p>On your virtual server you should store all the files you want to make up your site under the /var/www/html folder, you can safely delete the "index" file that is already there</p>
                <p>This file is stored in /var/www/html/info you probably shouldn't delete it!</p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Using SSH</h2>
                <p>On the university machines, there is an application called putty. This allows you to create an SSH (Secure Shell) Connection to you virtual server. </p>
                <p>Secure Shell, sometimes known as Secure Socket Shell, is a UNIX-based command interface and protocol for securely getting access to a remote computer. It is widely used by network administrators to control Web and other kinds of servers remotely.
                Basically this gives you command line access to your server, as if you were actually sitting at it.</p>
                <h3>Putty Settings</h3>
                <p>Once you open putty, you should be presented with something that looks like the screen below, just go ahead and fill in the details. The host name will be 127.0.0.1 and the port will be 2200</p>
                <p><img src="putty.jpg" alt="Screenshot of putty initial connection screen"/></p>
                <p>A few seconds after you hit the open button a black screen will appear asking you to login</p>
                <p>The username is <b>vagrant</b> and the password is <b>vagrant</b></p>
                <p><img src="putty2.jpg" alt="Screenshot of putty ssh login screen"/></p>
                <p>Once logged in you will see some general info about the virtual server and you will now have access to the command line prompt. the UNIX command line is a little different from Windows Command Prompt, if you don't know any UNIX commands have a look here : <a href="unix.php">UNIX Commands</a> </p>
                <p><img src="putty3.jpg" alt="Screenshot of putty once connection established"/></p>
                <p>if you would like to download putty for your own machine you can get it here: <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html">Putty</a> </p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Using FTP</h2>
                <p>The File Transfer Protocol (FTP) is a standard network protocol used to transfer computer files from one host to another host over a TCP-based network, such as the Internet. FTP is built on a client-server architecture and uses separate control and data connections between the client and the server.</p>
                <p>The university provides Filezilla on most machines, it's one of the best FTP applications and it's free. You can download it from here: <a href="https://filezilla-project.org/">Filezilla</a> </p>
                <p>Once you open Filezilla it is very easy to connect to your virtual server to upload files. Not you can use the same settings if you are using the FTP deployment in PHPSTORM</p>
                <p>Your host will be <b>SFTP://127.0.0.1</b> your username will be <b>vagrant</b>, your password is <b>vagrant</b> and the port is <b>2200</b></p>
                <p><img src="filezilla.jpg" alt="Screenshot of the filezilla main screen" </p>
                <p>Filezilla works just like windows explorer but has a split screen with local files on the left and remote (server) files on the right. To transfer files between the two can just drag them across.</p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Using Git / GitHub</h2>
                <p>Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.</p>
                <p>Your WADERbox already has git installed on it, this means that you cna checkout your projects from GitHub directly onto your development server.</p>
                <p>If you haven't already, you should create a free account on <a href="https://github.com/">GitHub</a></p>
                <p>You should connect this to your PHPStorm development environment, full instructions are <a href="https://www.jetbrains.com/phpstorm/help/using-github-integration.html"> here </a> </p>
                <p>You can then check out your code, directly to your server using <b>git clone https://github.com/[your git repository] [the directory where you want your project]</b></p>
                <p>For example, <b>git clone https://github.com/webdevexamples examples</b> would clone the RGU web dev examples repository into a directory called <b>examples</b> on your server</p>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-8 col-md-offset-2 wrap">
                <h2>Using Vagrant @ home</h2>
                <p>Vagrant lets us create and configure lightweight, reproducible, and portable development environments.</p>
                <p>What this means is that the development environment you use in UNI, at Home and when you submit your code will be exactly the same. This gets around the "it works at home", "its works on my laptop" and "it only works on this pc" problem.</p>
                <p>On the PC you are running this on, there will be a directory called waderbox, within this there will be files called <b>vagrantfile</b> if you take a copy of this file and put it on another machine with vagrant installed you can create a virtual machine with exactly the same settings.</p>
                <p>The vagrantfile is so small, you can include it in your Git Repostory, this means that whoever you share your code with (like when you submit it) has the same development environment as you!</p>
                <p>Best of all Vagrant is completely free, you can install from <a href="http://docs.vagrantup.com/v2/getting-started/index.html">Vagrant</a></p>
                <p>If you want to install WADERbox on your own machine, follow the instructions <a href="wader.php">here</a></p>
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