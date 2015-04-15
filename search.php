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
<link href="settings/styling.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="#" href="#" />
<link rel="shortcut icon" href="#" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/nav-small.js"></script>
<script type="text/javascript" src="js/scrolltop.js"></script>
<script type="text/javascript" src="js/flickr/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/flickr/setup.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="js/superfish/superfish.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/tipsy/jquery.tipsy.js"></script>
<script type='text/javascript'>
	$(function() {    
		$('.sociable li a img').tipsy({gravity: 'n'});		
	});
</script>
<script type="text/javascript" src="js/selectbox.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
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
<title>��ѯ</title>
</head>
<body>
<div class="container-wrap" id="cap"></div>
<!--HEADER-->
<div id="header" class="clear">
  <div class="header-wrapper">
    <!--LOGO-->
    <div class="logo">
      <h1><a href="index.php"><img src="img/logo.png" alt="" title="" /></a></h1>
    </div>
    <!--MENU-->
    <nav id = "main-nav-menu">
      <ul class="sf-menu">
        <li><a href="index.php">��ҳ</a>
        </li>
        <li><a href="lgdphoto.php">У԰���</a></li>
        <li class="active"><a href="#">��ѧ��ѯ</a>
          <ul>
            <li><a href="search.php">�ְ��ѯ</a></li>
            <li><a href="searchresult.php">�ְ��ѯ���</a></li>
            <li><a href="#">�ҵİ༶</a></li>
            <li><a href="#">רҵ�γ���Ϣ</a></li>
          </ul>
        </li>

        <li><a href="contact.html">����</a></li>
      </ul>
    </nav>
    <!-- end menu -->
    <select id = "responsive-main-nav-menu" onchange = "javascript:window.location.replace(this.value);"></select>
  </div>
  <div class="clear"></div>
</div>
<!--WELCOME-->
<div class="heading-top">
  <h2>��ѧ <span>��ѯ</span></h2>
  <div id="myslides1">
    <label>&mdash; �ṩ������ѧ�ְ�����ѯ </label>
    <label>&mdash; ����������ѧ֮ǰ���õ���ϤУ԰����˺���</label>
  </div>
</div>
<!--SITE CONTAINER-->
<div id="container">
  <!--SITE CONTENTS-->
  <div id="contents" class="clear">
    <!--MAIN CONTENT-->
    <div class="main-content">
      <!--FORMS-->
      <div class="form">
        <h3>���������ĸ�����Ϣ</h3>
        <form id="cform" action="searchresult.php" method="post">
          <ul class="clear">
            <li>
              <label class="la" for="name">����</label>
              <input type="text" name="name" id="name" class="required" />
            </li>
            <li>
              <label class="la" for="id">����֤��</label>
              <input type="text" name="id" id="id" class="ID Number" />
            </li>
            <li> <span>
              <input class="btsubmit" type="submit" name="btsend" value="�ύ" />
              </span> </li>
          </ul>
        </form>
      </div>
    </div>
    <!--SIDEBAR-->
    <div class="sidebar">
      <!--CATEGORIES-->
      <div class="contact-info">
        <h5>ʹ�ù����������ʣ�<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>�������ǶԱ�վ���κ����ʻ��߽��飬�������ʹ�ù����г������κ�����</li>
          <li>�������Ϸ��ķ��������·��ĵ�ַ�������ԣ���Ҳ�ᾡ��Ľ��лظ���</li>
          <li><span>URL:</span> <a>tieba.com</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Footer-->
<div id="footer" class="clear">
  <!--BOTTOM COLUMNS-->

  <!--FOOTER-->
  <div id="footer-bot">
    <div class="footer-wrapper">
      <label>&copy; 2015. xfcy All rights reserved.</label>
    </div>
  </div>
</div>
<a href="#" id="toTop">&uarr;</a>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cform").validate();
	});
</script>
<!--FOR PREVIEW ONLY-->

<!--ENDS HERE-->
</body>
</html>