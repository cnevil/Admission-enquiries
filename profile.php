<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
if ($_GET['session']==NULL)
header("Location: index.php");
include ("inc/config.php");
  $session=$_GET['session'];
  $q = "SELECT * FROM users where idnumber like '$session'";
  mysql_query("SET NAMES GB2312");
  $rs = mysql_query($q, $link);                     //��ȡ���ݼ�
  $row = mysql_fetch_row($rs);
  if($row[0]==NULL){header("Location: search.php");}
  $class = $row[3];
  $infonow=$row[7];
  mysql_free_result($rs);
  include "inc/head.php"; ?>
<title>�ҵİ༶</title>
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
  <h2>�ҵ� <span>�༶</span></h2>
  <div id="myslides1">
    <label>&mdash; ������ʾ�������ķְ���ϸ��Ϣ </label>
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
            <th>��ϵ��ʽ</th>
          </tr>
          </thead>
          <?php
          $q = "update users set isopen = 1 WHERE idnumber like '$session'";
          mysql_query("SET NAMES GB2312");
          mysql_query($q, $link);                     //��ȡ���ݼ�
          $c = "select name,info from users where class like '$class' and isopen = 1";
          $rc = mysql_query($c, $link);
          //$rowc = mysql_fetch_row($rc);
          while($rowc=mysql_fetch_array($rc))
          {echo " <tbody>";
          echo"<tr>";
          echo "<td>$rowc[0]</td><td>$rowc[1]</td>" ;
          echo "</tr>";
          echo "</tbody>";}
          mysql_free_result($rc);   //�ر�����
          ?>
          </tbody>
        </table>
        </div>
      <div class="form">
        <h3></h3>
        <h5>�ҵ���ϵ��ʽ</h5>
        <form id="cform" action="dealling.php" method="post">
          <ul class="clear">
            <li>
              <label class="la" for="info">��ϵ��ʽ(QQ)</label>
              <?php echo"<input type='text' name='info' id='info' class='required' value='$infonow'' />"; ?>
            </li>
            <?php echo "<input type='hidden' name='session' value='$session'>";?>
              <span>
              <input class="btsubmit" type="submit" name="btsend" value="�ύ" />
              </span>
            </li>
          </ul>
        </form>
      </div>
    </div>





    <div class="sidebar">
      <div class="contact-info">
        <h5>Ϊʲô�������ҵİ༶��ϸ��Ϣ��<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>���������༶�ﻹû�������˲�ѯ�򹫿���Ϣ�����������ͬרҵ��������վ</li>
          <li>����ֽ����Ϣ�����Ӻøж�Ŷ~</li>
          <li>���ʼ�յò����༶��Ϣϣ���ܼ�ʱ���ҷ���</li>
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
<?php include "inc/footer.php"; ?>

</body>
</html>
