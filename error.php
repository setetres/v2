<?
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set('display_errors', TRUE);

    $status = $_SERVER['REDIRECT_STATUS'];
    $codes = array(
        400 => array('401 Unauthorized', ''),
        401 => array('402 Payment Required', ''),
        403 => array('403 Forbidden', ''),
        404 => array('404 Not Found', ''),
        405 => array('405 Method Not Allowed', ''),
        406 => array('406 Not Acceptable', ''),
        408 => array('408 Request Timeout', ''),
        409 => array('409 Conflict', ''),
        413 => array('413 Request Entity Too Large', ''),
        414 => array('414 Request-URI Too Large', ''),
        500 => array('500 Internal Server Error', ''),
        500 => array('501 Not Implemented', ''),
        502 => array('502 Bad Gateway', ''),
        504 => array('504 Gateway Timeout', ''),
    );

    $title = $codes[$status][0];
    $message = $codes[$status][1];
    if ($title == false || strlen($status) != 3) {
        $message = 'Please supply a valid status code.';
    }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org"><!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Sete Três - http://setetres.st"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">

        <title><?=$title?></title>
        <meta name="description" content=""/>
        <link rel="canonical" href=""/>

        <meta property="og:type" content=""/>
        <meta property="og:title" content="<?=$title?>"/>
        <meta property="og:description" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>

        <meta itemprop="name" content="<?=$title?>"/>
        <meta itemprop="description" content=""/>
        <meta itemprop="image" content=""/>
        <meta itemprop="url" content=""/>

        <meta name="twitter:card" content=""/>
        <meta name="twitter:title" content="<?=$title?>"/>
        <meta name="twitter:description" content=""/>
        <meta name="twitter:image" content=""/>

        <link rel="icon" href="favicon.ico"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/main-responsive.css"/>

        <script src="js/modernizr.js"></script>
    </head>
    <body>
        <div id="wr">
            <header>
                <div class="center">
                    <h1 class="logo"><?=$title?></h1>
                </div>
            </header>
            <div id="main" role="main" class="wr">
                <div class="center">
                </div>
            </div>
            <footer>
                <div class="center">
                    <p>Copyright</p>
                </div>
            </footer>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/grid.js"></script>
        <script>

            // analytics

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'XX-XXXXXXXX-X', 'domain.com');
            ga('send', 'pageview');

        </script>
    </body>
</html>