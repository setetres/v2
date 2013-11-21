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
<html lang="en" itemscope itemtype="http://schema.org">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Sete Três - http://setetres.st"/>
        <meta name="keywords" content=""/>

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

        <link rel="icon" href="favicon.ico"/>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css"/>
        <link rel="stylesheet" href="../css/main-responsive.css"/>

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
                </div>
            </footer>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/grid.js"></script>
<? include("../inc/analytics.php");?>
    </body>
</html>