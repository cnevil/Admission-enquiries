<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include "inc/head.php"; ?>
<title>��ѧ��ѯ</title>
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
            <li><a href="profile.php">�ҵİ༶</a></li>
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
              <label class="la" for="id">���֤��</label>
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
        <h5>��ʹ������վ��ȫ��<span class="arrow">&nbsp;</span></h5>
        <ul class="clear">
          <li>����վֻ��Ϊ�˷������������������κ�ӯ��������ô�</li>
          <li>������ģ��Ҳ�������߼���֤�����Բ���й¶���ĸ�����Ϣ��</li>
        </ul>
      </div>
      <div class="contact-info">
        <h5>ʹ�ù��������������ʣ�<span class="arrow">&nbsp;</span></h5>
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
<?php include "inc/footer.php"; ?>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cform").validate();
	});
</script>

<!--ENDS HERE-->
</body>
</html>
