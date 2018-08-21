<!DOCTYPE html>
<html lang="bs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Glasometar, aplikacija za provjeru glasačkih preferencija birača">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="image/favicon.ico" rel="shortcut icon">
    
    <meta property="og:image" content="http://glasometar.ba/image/glasometar_og_logo.png"/>
	<meta property="og:title" content="Glasometar"/>
	<meta property="og:url" content="http://glasometar.ba"/>
	<meta property="og:site_name" content="Glasometar"/>
	<meta property="og:type" content="website"/>

    <title>Glasometar | aplikacija za provjeru glasačkih preferencija birača</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
	<link rel="stylesheet" href="css/vaa2014.css">
	<style>
	body {
      padding-top: 0;
    }
	@media (min-width: 666px) {
  .header {
        background: url("http://glasometar.ba/2014/image/bg.jpg") no-repeat fixed center center / cover rgba(0, 0, 0, 0); 
      }
    }
    @media (min-width: 750px) {
      h1 {background: none repeat scroll 0 0 rgba(0, 0, 0, 0.2);}
    }
    h1 { color: #FFFFFF; display: inline; line-height: 60px; font-family: 'Roboto Slab',serif; padding: 10px 20px; vertical-align: baseline; width: auto; }
    .lead { font-size: 16px; font-weight: 200; line-height: 1.4; margin-bottom: 50px; margin-bottom: 20px; font-size: 21px; color: #fff;}
    .nav a {color: #428BCA}
    </style>
	
</head>
<body>



    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://glasometar.ba/">Glasometar.ba</a></li>
            <li><a href="info/">O projektu</a></li>
            <!--<li><a href="embed/">Podijeli glasometar</a></li>-->
            <li><a href="http://glasometar.ba/kontakt/">Kontakt</a></li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        
		<div class="vert-text">    
       
			<h1>Glasometar 2014</h1>
            <div class="col-md-6 col-md-offset-3 text-center" style="padding-top:2em;">
			<p class="lead">
                Glasometar.ba je aplikacija koja omogućava potencijalnim biračima u BiH da testiraju svoje stavove i mišljenja o ključnim pitanjima u politici, te da ih uporede sa stavovima i mišljenjima 18 najrelevantijih partija/stranaka u BiH.
            </p>
                   <div style="padding-bottom:3em">
				     <?php 
                        //research
                        $rand=rand(0,5);
                        if ($rand == 0)
                          echo '<a class="btn btn-lg btn-success" href="2014/research.php" data-rel="dialog">Pokreni aplikaciju</a>';
                        else
                          echo '<a class="btn btn-lg btn-success" href="2014" data-ajax="false">Pokreni aplikaciju</a>';
                      ?> 
				   </div>
				 
				   <p>
				   
				   <div class=""><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FGlasometar&amp;width=100&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=346936452142574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:65px;" allowTransparency="true"></iframe><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://volebnakalkulacka.sk" data-text="Zkúste také Volebnú kalkulačku!" data-via="KohoVolitEU" data-hashtags="EP2014" data-count ="vertical">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


</div></div>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

  



     <!-- Footer -->
         <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    
                    <a href="http://zastone.ba" title="KohoVolit.eu 2014" id="footer-glasometar-logo"><img src="../../2014/image/glasometar_logo.png" alt="logo glasometar.ba" /></a><br /><br />
                    <a href="http://zastone.ba" title="KohoVolit.eu 2014" id="footer-zastone-logo"><img src="../../2014/image/zastone_logo.png" alt="logo zastone.ba" /></a><br /><br />
                    <a href="http://zastone.ba" title="KohoVolit.eu 2014" id="footer-kohovolit-logo"><img src="../image/logo.png" alt="logo kohovolit.eu" /></a>
					<p class="lead black"><a href="http://glasometar.ba">Glasometar.ba</a> <br/> <a href="http://www.votematch.eu/">VoteMatchEurope</a></p>
					
                    <hr>
					<p class="black">Creative Commons BY 4.0 | <a href="http://zastone.ba" id="footer-kohovolit-licence">KohoVolit.eu 2014</a> 2014</p>
                </div>
            </div>
        </div>
    </footer>
     <!-- /Footer -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-17907866-5']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /google analytics -->
</body>

</html>
