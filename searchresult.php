<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<?php
if ($_POST['id']==NULL or $_POST['name']==NULL)
header("Location: search.php");
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
<title>��ѯ���</title>
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
    <select id = "responsive-main-nav-menu" onchange = "javascript:window.location.replace(this.value);">
    </select>
  </div>
  <div class="clear"></div>
</div>
<!--WELCOME-->
<div class="heading-top">
  <h2>��ѯ <span>���</span></h2>
  <div id="myslides1">
    <label>&mdash; ������ʾ����������ѧ�ְ���Ϣ </label>
    <label>&mdash; �������ڴ���ǰ��ʶ�����ͬ��ͬѧ</label>
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
            <th>����</th>
            <th>�༶</th>
            <th>�༶����</th>
          </tr>
          </thead>
          <?php
          try{$link=mysql_connect("localhost","root","");
          mysql_select_db("lgd2015", $link);          //ѡ�����ݿ�
          $name=$_POST['name'];
          $id=$_POST['id'];
          $q = "SELECT class FROM users where name like '$name' and idnumber like '$id'";
          //SQL��ѯ���
          mysql_query("SET NAMES GB2312");
          $rs = mysql_query($q, $link);                     //��ȡ���ݼ�
          if(!$rs){die("Valid result!");}
          $row = mysql_fetch_row($rs);
          $c = "select count(*) from users where class like '$row[0]'";
          $rc = mysql_query($c, $link);
          $rowc = mysql_fetch_row($rc);
          echo " <tbody><tr>";
          echo "<td>$name</td><td>$row[0]</td><td>$rowc[0]</td></tr> </tbody>";
          echo "</table>";
          mysql_free_result($rs);   }//�ر����ݼ�
          catch (Exception $name){ }
          $url='http://'.$_SERVER['SERVER_NAME'].'/profile.php?session='.$id;
          ?>
          </tbody>
        </table>
      </div>
      <?php echo"<h5></h5>";
      echo"<h5>�������鿴�����ڰ༶������ͬѧ����������·����ӣ�</h5>";
      echo"<h5><font color='#FF0000'>һ������������Ӿʹ�����ͬʱҲͬ���򱾰�����ͬѧ�����Լ��ı�Ҫ��Ϣ�������ؿ��ǣ�</font></h5>";
      echo"<h4><a href='$url''>�ҵİ༶</a></h4>";?>
    </div>





    <div class="sidebar">
      <div class="contact-info">
        <h5>Ϊʲôû���ҵİ༶��Ϣ��<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>�뷵����һҳ����������Ϣ�Ƿ���ȷ�������ٴβ�ѯ</li>
          <li>����������������Ƨ��ʱϵͳҲ������ȷ���ؽ��</li>
          <li>����Ҫ��һ�㣬��ѯ��������ζ��û�б�¼ȡ��һ����¼ȡ֪ͨ������յ�У���֪�ķְ���Ϊ׼</li>
        </ul>
      </div>
      <div class="contact-info">
        <h5>ʹ�ù����������ʣ�<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>�������ǶԱ�վ���κ����ʻ��߽��飬�������ʹ�ù����г������κ�����</li>
          <li>�������Ϸ��ķ��������·��ĵ�ַ�������ԣ���Ҳ�ᾡ��Ľ��лظ���</li>
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
