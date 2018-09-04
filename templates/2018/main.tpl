<!DOCTYPE html>
<html lang="{$text['lang']}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$text['description']}">
    <meta name="keywords" content="{$text['keywords']}">
    <meta name="author" content="{$text['author']}">

    <link rel="apple-touch-icon" sizes="180x180" href="/2018/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/2018/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/2018/images/favicon-16x16.png">
    <link rel="manifest" href="/2018/images/site.webmanifest">
    <link rel="mask-icon" href="/2018/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/2018/images/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Glasometar">
    <meta name="application-name" content="Glasometar">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-config" content="/2018/images/browserconfig.xml">
    <meta name="theme-color" content="#333333">

    <meta property="og:image" content="{$text['og:image']}" />
    <meta property="og:title" content="{$text['calc']}" />
    <meta property="og:url" content="{$text['url']}" />
    <meta property="og:description" content="{$text['description']}" />
    <meta property="fb:app_id" content="{$text['result_fb_appid']}" />
    <meta property="og:site_name" content="{$text['calc']}" />
    <meta property="og:type" content="website" />
    {block name=additionalHead}{/block}

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
    <link rel="stylesheet" href="/2018/css/app.css">
    {block name=lastHead}{/block}
</head>

<body>
    <!--[if lte IE 8]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> {$text['ie8']}
    </div>
    <![endif]-->
    <!--[if lte Opera 11]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> {$text['opera11']}
    </div>
    <![endif]-->

    <div id="top" class="wrapper">
        {block name=body}{/block}
    </div>
    <!-- /#top -->
    {block name=outsideBody}{/block}

    {block name=footer}{/block}

    <script src="/2018/js/app.js"></script>

    {block name=js}{/block}
    <!-- google analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', "{$text['google_tracking_id']}"]);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <!-- /google analytics -->
</body>

</html>
