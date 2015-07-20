<?php
  session_start();
  if ($_POST['id']==NULL or $_POST['name']==NULL)
  header("Location: search.php");
  include "inc/config.php";
  include "inc/head.php";
?>
<title>查询结果</title>
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
  <h2>查询 <span>结果</span></h2>
  <div id="myslides1">
    <label>&mdash; 这里显示的是您的入学分班信息 </label>
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
            <th>班级</th>
            <th>班级人数</th>
          </tr>
          </thead>
          <?php
           $name=remove_xss($_POST['name']);
           $id=intval($_POST['id']);
           $q = "SELECT class FROM users where name like '$name' and idnumber like '$id'";  //SQL查询语句
           mysql_query("SET NAMES GB2312");
           $rs = @mysql_query($q);                     //获取数据集
            if(!$rs){die("Valid result!");}
           $_SESSION['id']=$id;
           $row = mysql_fetch_row($rs);
           $c = "select count(*) from users where class like '$row[0]'";
           $rc = @mysql_query($c);
           $rowc = mysql_fetch_row($rc);
            echo " <tbody><tr>";
            echo "<td>$name</td><td>$row[0]</td><td>$rowc[0]</td></tr> </tbody>";
            echo "</table>";
            mysql_free_result($rs);
            $url='http://'.$_SERVER['SERVER_NAME'].'/profile.php';
          ?>
          </tbody>
        </table>
      </div>
      <?php echo"<h5></h5>";
      echo"<h5>如果你想查看您所在班级的其他同学情况，请点击下方链接：</h5>";
      echo"<h5><font color='#FF0000'>一旦您点击此链接就代表您同时也同意向本班其他同学公开自己的必要信息，请慎重考虑：</font></h5>";
      echo"<h4><a href='$url''>我的班级</a></h4>";?>
    </div>





    <div class="sidebar">
      <div class="contact-info">
        <h5>为什么没有我的班级信息？<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>请返回上一页面检查您的信息是否正确并尝试再次查询</li>
          <li>当您的姓名中有生僻字时系统也许不能正确返回结果</li>
          <li>更重要的一点，查询不到不意味着没有被录取，一切以录取通知书和最终到校后得知的分班结果为准</li>
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
<?php include "inc/footer.php"; ?>

</body>
</html>
