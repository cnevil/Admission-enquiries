<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="keywords" content="Hosto, Photography, Photo Images, Responsive, Business, Corporate, Gallery, Notebook" />
<meta name="description" content="Hosto" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="js/superfish/superfish.css" rel="stylesheet" type="text/css" media="screen" />
<link href="js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<link href="js/flexslider/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="js/tabs/tabs.css" rel="stylesheet" type="text/css" media="screen" />
<link href="js/jcarousel/jcarousel.css" rel="stylesheet" type="text/css" />
<link href="settings/styling.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="#" href="#" />
<link rel="shortcut icon" href="#" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/nav-small.js"></script>
<script type="text/javascript" src="js/jquery.trigger.js"></script>
<script type="text/javascript" src="js/scrolltop.js"></script>
<script type="text/javascript" src="js/flickr/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/flickr/setup.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="js/superfish/superfish.js"></script>
<script type="text/javascript" src="js/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jcarousel/jquery.elastislide.js"></script>
<script type='text/javascript'>
	$(function() {
		$('.sociable li a img').tipsy({gravity: 'n'});
	});
</script>
<script type="text/javascript" src="js/selectbox.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="js/tabs/jquery.tabs.js"></script>
<script type="text/javascript" src="js/hover.js"></script>
<script type="text/javascript" src="js/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('.flexslider').flexslider();
	});
</script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script type="text/javascript">
	jQuery(function($){
		$("#tweet").tweet({
			avatar_size: 32,
			count: 2,
		query: "themeforest",
		loading_text: "Loading Tweets..."
		});
	});
</script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// Banners button
			jQuery('ul.banners_cycle li').mouseenter(function(){
				jQuery(this).find('.button').stop(false,true).fadeIn();
			})
			jQuery('ul.banners_cycle li').mouseleave(function(){
				jQuery(this).find('.button').stop(false,true).fadeOut();
			});
			
			// Banners
			jQuery('ul.banners_cycle li:not(.style-1)').mouseenter(function(){
				jQuery(this).css('z-index','6');
				jQuery(this).stop(false, true).animate({right:'-64px'}, {easing:"swing", duration: 300});
				jQuery(this).animate({right:'0'});
			});
			jQuery('ul.banners_cycle li:not(.style-1)').mouseleave(function(){
				jQuery(this).stop(false, true).animate({right:'-64px'});
				jQuery(this).stop(false, true).animate({right:'0'}, 'slow');
			});
			
			// Banner #2
			jQuery('ul.banners_cycle li.style-2').mouseleave(function(){
				jQuery(this).css('z-index','5');
			});
			// Banner #3
			jQuery('ul.banners_cycle li.style-3').mouseleave(function(){
				jQuery(this).css('z-index','4');
			});
			// Banner #4
			jQuery('ul.banners_cycle li.style-4').mouseleave(function(){
				jQuery(this).css('z-index','3');
			});
			// Banner #5
			jQuery('ul.banners_cycle li.style-5').mouseleave(function(){
				jQuery(this).css('z-index','2');
			});
			// Banner #6
			jQuery('ul.banners_cycle li.style-6').mouseenter(function(){
				jQuery('body').css('overflow-x','hidden');
			});
			jQuery('ul.banners_cycle li.style-6').mouseleave(function(){
				jQuery(this).css('z-index','1');
				jQuery('body').css('overflow-x','hidden');
			});
		});
  </script>
<title>�ɹ���15��������ѧ��ѯ</title>
</head>
<body>
<div class="container-wrap" id="cap"></div>
<div id="header" class="clear">
  <div class="header-wrapper">
    <!--LOGO-->
    <div class="logo">
      <h1><a href="index.html"><img src="img/logo.png" alt="" title="" /></a></h1>
    </div>
    <!--MENU-->
    <nav id = "main-nav-menu">
      <ul class="sf-menu">
        <li class="active"><a href="index.php">��ҳ</a>
        </li>
        <li><a href="lgdphoto.php">У԰���</a></li>
        <li><a href="#">��ѧ��ѯ</a>
          <ul>
            <li><a href="search.php">�ְ��ѯ</a></li>
            <li><a href="searchresult.php">�ְ��ѯ���</a></li>
            <li><a href="#">�ҵİ༶</a></li>
            <li><a href="#">רҵ�γ���Ϣ</a></li>
          </ul>
        </li>
        <li><a href="contact.php">����</a></li>
      </ul>
    </nav>
    <select id = "responsive-main-nav-menu" onchange = "javascript:window.location.replace(this.value);">
    </select>
  </div>
  <div class="clear"></div>
</div>
<!--WELCOME-->
<div class="small-description-2">
  <h2>�ɹ���2015 <span>������ѧ </span>�ְ��ѯ</h2>
</div>
<!--SITE CONTAINER-->
<div id="container">
  <div id="contents-1" class="clear">
    <div id="slider" class="flexslider">
      <ul class="slides">
        <li><img src="img/gallery/1.jpg" alt="" title="" />
        <li><img src="img/gallery/2.jpg" alt="" title="" />
        </li>
        <li><img src="img/gallery/3.jpg" alt="" title="" />
      </ul>
    </div>
    <div class="fullwidth">
    </div>
  </div>
</div>

<!--Footer-->
<?php include "inc/footer.php"; ?>

</body>
</html>
