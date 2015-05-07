<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<?php
if ($_GET['session']==NULL)
header("Location: warning.php");
try{$link=mysql_connect("localhost","root","");
  mysql_select_db("lgd2015", $link);          //选择数据库
  $session=$_GET['session'];
  $q = "SELECT * FROM users where idnumber like '$session'";
  //SQL查询语句
  mysql_query("SET NAMES GB2312");
  $rs = mysql_query($q, $link);                     //获取数据集
  $row = mysql_fetch_row($rs);
  if($row[0]==NULL){header("Location: search.php");}
  $class = $row[3];
  mysql_free_result($rs);   }//关闭数据集
catch (Exception $session){ }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="keywords" content="Hosto, Photography, Photo Images, Responsive, Business, Corporate, Gallery, Notebook" />
<meta name="description" content="Hosto" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="table.css" rel="stylesheet" type="text/css" />
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
<title>我的班级</title>
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
        <li><a href="index.php">首页</a>
        </li>
        <li><a href="lgdphoto.php">校园风光</a></li>
        <li class="active"><a href="#">入学查询</a>
          <ul>
            <li><a href="search.php">分班查询</a></li>
            <li><a href="searchresult.php">分班查询结果</a></li>
            <li><a href="#">我的班级</a></li>
            <li><a href="#">专业课程信息</a></li>
          </ul>
        </li>

        <li><a href="contact.html">反馈</a></li>
      </ul>
    </nav>
    <!-- end menu -->
    <select id = "responsive-main-nav-menu" onchange = "javascript:window.location.replace(this.value);">
    </select>
  </div>
  <div class="clear"></div>
</div>
<!--WELCOME-->
<div class="heading-top">
  <h2>我的 <span>班级</span></h2>
  <div id="myslides1">
    <label>&mdash; 这里显示的是您的分班详细信息 </label>
    <label>&mdash; 您可以在此提前认识到你的同班同学</label>
  </div>
</div>
<!--SITE CONTAINER-->
<div id="container">
  <!--SITE CONTENTS-->
  <div id="contents" class="clear">
    <!--MAIN CONTENT-->
    <div class="main-content">
      <!--TABLES-->



      <div class="widget_contents noPadding">
        <table class="tables">
          <thead>
          <tr>
            <th>姓名</th>
            <th>联系方式</th>
          </tr>
          </thead>
          <?php
          $q = "update users set isopen = 1 WHERE idnumber like '$session'";
          mysql_query("SET NAMES GB2312");
          mysql_query($q, $link);                     //获取数据集
          $c = "select name,info from users where class like '$class' and isopen = 1";
          $rc = mysql_query($c, $link);
          //$rowc = mysql_fetch_row($rc);
          while($rowc=mysql_fetch_array($rc))
          {echo " <tbody>";
          echo"<tr>";
          echo "<td>$rowc[0]</td><td>$rowc[1]</td>" ;
          echo "</tr>";
          echo "</tbody>";}
          mysql_free_result($rc);   //关闭数据
          ?>
          </tbody>
        </table>
      </div>
    </div>





    <div class="sidebar">
      <div class="contact-info">
        <h5>为什么看不到我的班级详细信息？<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>可能是您班级里还没有人来此查询或公开信息，请多多向身边同专业的宣传本站</li>
          <li>帮妹纸查信息能增加好感度哦~</li>
          <li>如果始终得不到班级信息希望能及时向我反馈</li>
        </ul>
      </div>
      <div class="contact-info">
        <h5>使用过程中有疑问？<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>无论您是对本站有任何疑问或者建议，亦或是在使用过程中出现了任何问题</li>
          <li>请点击右上方的反馈或者下方的地址进行留言，我也会尽快的进行回复。</li>
          <li><span>URL:</span> <a>tieba.com</a></li>
        </ul>
      </div>
    </div>
      <!--CATEGORIES-->

    </div>
  </div>
</div>

<!--Footer-->
<div id="footer" class="clear">
  <!--FOOTER-->
  <div id="footer-bot">
    <div class="footer-wrapper">
      <label>&copy; 2015. xfcy All rights reserved.</label>
    </div>
  </div>
</div>
<a href="#" id="toTop">&uarr;</a>
<script type="text/javascript" src="js/custom.js"></script>
<!--FOR PREVIEW ONLY-->

</body>
</html>
