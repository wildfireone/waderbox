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
            background: #05003D;
            margin-bottom: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        article .content .wrap h2 {
            margin: 10px 0 15px;
            color: #fff;
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
    <h1><i class="vaderimg"></i>About Your<br>WADERbox<br></h1>



</section>


<article>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Installed Software</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>PHP Version</td>
                        <td><?php echo phpversion(); ?></td>
                    </tr>
                    <?php
                    $mysql_exists = FALSE;
                    if (extension_loaded('mysql') or extension_loaded('mysqli')) :
                        $mysql_exists = TRUE;
                    endif;
                    $mysqli = @new mysqli('localhost', 'root', 'toor');
                    $mysql_running = TRUE;
                    if (mysqli_connect_errno()) {
                        $mysql_running = FALSE;
                    } else {
                        $mysql_version = $mysqli->server_info;
                    }

                    $mysqli->close();
                    ?>
                    <tr>
                        <td>MySQL is installed</td>
                        <td><i class="fa fa-<?php echo ($mysql_exists ? 'check' : 'times'); ?>"></i></td>
                    </tr>
                    <tr>
                        <td>MySQL is connected</td>
                        <td><i class="fa fa-<?php echo ($mysql_running ? 'check' : 'times'); ?>"></i></td>
                    </tr>
                    <tr>
                        <td>MySQL Version</td>
                        <td><?php echo ($mysql_running ? $mysql_version : 'N/A'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>SSH Credentials</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>SSH Host</td>
                        <td>127.0.0.1</td>
                    </tr>
                    <tr>
                        <td>PORT</td>
                        <td>2200</td>
                    </tr>
                    <tr>
                        <td>SSH User</td>
                        <td>vagrant</td>
                    </tr>
                    <tr>
                        <td>SSH Password</td>
                        <td>vagrant</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>SFTP Credentials</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>SFTP Host</td>
                        <td>127.0.0.1</td>
                    </tr>
                    <tr>
                        <td>PORT</td>
                        <td>2200</td>
                    </tr>
                    <tr>
                        <td>FTP User</td>
                        <td>vagrant</td>
                    </tr>
                    <tr>
                        <td>FTP Password</td>
                        <td>vagrant</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>PHP MyAdmin Credentials</h2>
                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <td>Admin Location</td>
                        <td><a href="http://127.0.0.1:8000/phpmyadmin/">http://127.0.0.1:8000/phpmyadmin/</a></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>root</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>toor</td>
                    </tr>
                    <tr>
                         <td>MySql Hostname</td>
                         <td>localhost</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-6 col-md-offset-3 wrap">
                <h2>PHP Modules</h2>
                <table class="table table-responsive table-striped table-hover">
                    <?php
                    $modules = get_loaded_extensions();
                    asort($modules);
                    foreach ($modules as $extension) :
                        ?>
                        <tr>
                            <td><?php echo $extension; ?></td>
                            <td><i class="fa fa-check"></i></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
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