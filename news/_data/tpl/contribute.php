<?php

	$setting=unserialize(@file_get_contents(DATA_DIR.'/setting/overnotes.dat'));
	ini_set('mbstring.http_input', 'pass');
	parse_str($_SERVER['QUERY_STRING'],$_GET);
	$keyword=isset($_GET['k'])?trim($_GET['k']):'';
	$category=isset($_GET['c'])?trim($_GET['c']):'';
	$page=isset($_GET['p'])?trim($_GET['p']):'';
	$base_title = !empty($setting['title'])? $setting['title'] : 'OverNotes';

?><!Doctype html>
<html lang="vn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<?php
	$contribute=get_contribute($contribute_id);
		$title=$contribute['title'];
	$category_id=$contribute['category'];
	$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
	$category_name=$category_data['name'];
	$category_text=@$category_data['text'];
	$category_url=$category_data['id'];
	$field_id=$contribute['field'];
	$id=$contribute['id'];
	$field=get_field($field_id);
	$date=$contribute['public_begin_datetime'];
	$url=$contribute['url'].'/';

	foreach($field as $field_index=>$field_data){
		${$field_data['code'].'_Name'}=$field_data['name'];
		${$field_data['code'].'_Value'}=make_value(
		$field_data['name']
				,@$contribute['data'][$field_id][$field_index]
			,$field_data['type']
			,$id
			,$field_id
			,$field_index
		);
		if($field_data['type']=='image'){
			${$field_data['code'].'_Src'}=ROOT_URI.'/_data/contribute/images/'.@$contribute['data'][$field_id][$field_index];
		}
	}

?>
<title><?php echo $title; ?>｜<?php echo $base_title; ?></title>
<?php
	if($description_Value){
?>
  <meta name="description" content="<?php echo $description_Value; ?>" />
  <?php
	}else{
?>
  <meta name="description" content="" />
<?php
	}
?>
<?php
	if($keywords_Value){
?>
  <meta name="keywords" content="<?php echo $keywords_Value; ?>" />
  <?php
	}else{
?>
  <meta name="keywords"  content="" />
<?php
	}
?>
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="shortcut icon" href="../../images/logo-altico.png" type="image/x-icon" />
<link rel="icon" href="../../images/logo-altico.png" type="image/x-icon" />
<meta name="msvalidate.01" content="604FCBBC33A980B03391586F5EF170A1" />
<link  href="../../css/styles.css" rel="stylesheet" type="text/css" />
<link  href="../../css/style_sp.css" rel="stylesheet" type="text/css" />
<link  href="../../css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="../../css/under.css" rel="stylesheet" type="text/css" />
<link  href="../../css/under_responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../../css/lightbox.min.css">
<script src="../../js/jquery.js" type="text/javascript"></script>
<script src="../../js/jquery.scroll.js" type="text/javascript"></script>

<script src="../../js/common.js" type="text/javascript"></script>
<script src="../../js/top.js" type="text/javascript"></script>
<!-- Google Analytics start -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96907281-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics end -->

</head>
<body id="" class="under under1">
<div id="wrapper">
<div id="header" class="clearfix">
    <div id="header_top">
      <div class="inner clearfix">
        <h1><a href="http://ttglancaster.vn/"><img src="../../images/logo-alt.svg" width="160" alt="Lancaster LinColn Citadel E6 Villas"></a></h1>
        <ul class="btn box_pc">
          <li><a href="tel:0909151109"><span>HOTLINE TRUNG THỦY LAND</span>0909 151 109</a></li>
        </ul>
      </div>
      <p id="nav-icon4" class="box_sp"><span></span> <span></span><span></span></p>
      <div id="gnavi_sp" class="box_sp">
        <ul>
          <li><a href="http://ttglancaster.vn/">TRANG CHỦ</a></li>
          <li><a href="../../gioithieu.html">giới thiệu</a></li>
          <li><a href="../../news/index.php">tin tức</a></li>
          <li class="sub"><span class="btn_sub">dự án</span>
            <ul class="sub_menu">
              <li><a href="../../lancasterlincoln.html">Lancaster Lincoln</a></li>
              <li><a href="../../citadel.html">Citadel Residence</a></li>
              <li><a href="../../villa.html">E6 Villa</a></li>
            </ul>
          </li>
          <li><a href="../../thanhtoan.html">thanh toán</a></li>
          <li><a href="../../lienhe.html">liên hệ</a></li>
        </ul>
      </div>
    </div>
    <div id="gnavi" class="clearfix box_pc">
      <div class="inner clearfix">
        <ul class="list_menu">
          <li><a href="http://ttglancaster.vn/"><img src="../../images/gnavi_home.png" width="22" alt="HOME"></a></li>
          <li><a href="../../gioithieu.html">giới thiệu</a></li>
          <li><a href="../../news/index.php">tin tức</a></li>
          <li class="sub"><a href="#">dự án</a>
            <ul class="submenu">
              <li><a href="../../lancasterlincoln.html">Lancaster Lincoln</a></li>
              <li><a href="../../citadel.html">Citadel Residence</a></li>
              <li><a href="../../villa.html">E6 Villa</a></li>
            </ul>
          </li>
          <li><a href="../../thanhtoan.html">thanh toán</a></li>
          <li><a href="../../lienhe.html">liên hệ</a></li>
        </ul>
      </div>
    </div>
  </div>

<!-- main start -->
<div id="main" class="clearfix"> 
  <!-- top_info start -->
  <div id="top_info" class="clearfix">
    <div class="top_info_box clearfix">
      <div class="inner clearfix">
        <h2><?php echo mb_strimwidth($title, 0, 45, '…', 'UTF-8'); ?></h2>
      </div>
    </div>
  </div>
  <div class="inner clearfix">
    <ul id="topic_path">
      <li><a href="http://ttglancaster.vn">Trang chủ</a>&nbsp;&nbsp;&gt;&nbsp;</li>
      <li><a href="../"><?php echo $base_title; ?></a>&nbsp;&gt;&nbsp;</li>
      <li><a href="../<?php echo $category_url; ?>/"><?php echo $category_name; ?></a>&nbsp;&gt;&nbsp;</li>
      <li><?php echo mb_strimwidth($title, 0, 90, '…', 'UTF-8'); ?></li>
    </ul>
    
    <!-- top_info end --> 
    
    <!-- content start -->
    <div id="content"> 
      <!-- inner start -->
      <div class="inner">
			<div class="section clearfix">
            <?php
	if($img_01_Value){
?>
              <p class="img_blog_lg"><a class="example-image-link" href="<?php echo $img_01_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_01_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
            <?php
	}
?>
          </div>
      </div>
      <div class="inner"> 
        <!--section02 end-->
        <?php if($content02_Value!=""||$img_02_Value!=""||$img_03_Value!=""||$img_04_Value!=""){  ?>
        <?php
	if($content02_Value){
?>
          <h4><?php echo $content02_Value; ?></h4>
        <?php
	}
?>
        <div class="section clearfix">
          <ul class="img_blog01">
            <?php
	if($img_02_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_02_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_02_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a> </p>
              </li>
            <?php
	}
?>
            <?php
	if($img_03_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_03_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_03_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
            <?php
	if($img_04_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_04_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_04_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
          </ul>
        </div>
        <?php }?>
        
        <!--section03 end-->
        <?php if($content03_Value!=""||$content04_Value!=""||$img_05_Value!=""||$img_06_Value!=""||$img_07_Value!=""){  ?>
        <?php
	if($content03_Value){
?>
          <h4><?php echo $content03_Value; ?></h4>
        <?php
	}
?>
        <div class="section clearfix">
          <?php
	if($content04_Value){
?>
            <p><?php echo $content04_Value; ?></p>
          <?php
	}
?>
          <ul class="img_blog01">
            <?php
	if($img_05_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_05_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_05_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
            <?php
	if($img_06_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_06_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_06_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
            <?php
	if($img_07_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_07_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_07_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
          </ul>
        </div>
        <?php }?>
        
        <!--section03 end-->
        <?php if($content05_Value!=""||$content06_Value!=""||$img_08_Value!=""||$img_09_Value!=""||$img_10_Value!=""){  ?>
        <?php
	if($content05_Value){
?>
          <h4><?php echo $content05_Value; ?></h4>
        <?php
	}
?>
        <div class="section clearfix">
          <?php
	if($content06_Value){
?>
            <p><?php echo $content06_Value; ?></p>
          <?php
	}
?>
          <ul class="img_blog01">
            <?php
	if($img_08_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_08_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_08_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
            <?php
	if($img_09_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_09_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_09_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
            <?php
	if($img_10_Value){
?>
              <li>
                <p><a class="example-image-link" href="<?php echo $img_10_Src; ?>" data-lightbox="example-1"><img src="<?php echo $img_10_Src; ?>" alt="<?php echo $title; ?>" class="example-image" /></a></p>
              </li>
            <?php
	}
?>
          </ul>
        </div>
        <?php }?>
        <div class="section clearfix">
          <p class="center btn_right mb0"><a href="../<?php echo $category_url; ?>/" class="btn-default">TIN TỨC &gt;</a></p>
        </div>
      </div>
      <!-- content end --> 
      
    </div>
    <!-- inner end --> 
    
  </div>
  <!-- main end -->
  
  <div id="footer">
    <p id="toTop"><a href="#wrapper"><img src="../../images/totop.png" width="60" alt="TOP"></a></p>
    <div id="footer_info">
      <div class="inner clearfix">
        <div id="footer_infoct">
          <p id="logofooter" class="clearfix"><a href="http://ttglancaster.vn"><img src="../../images/logo-altf.svg" width="160" alt="ttglancaster"></a></p>
          <p class="addressfooter clearfix">21 Nguyễn Trung Ngạn, Quận 1, TP. HCM <a href="https://www.google.com/maps/place/Miss+Ao+Dai+Shopping+Center-Fine+Art%26+Handicrafts/@10.7825218,106.7037072,18z/data=!4m8!1m2!3m1!2sMiss+Ao+Dai+Shopping+Center-Fine+Art%26+Handicrafts!3m4!1s0x0000000000000000:0xa1c963d101dfca56!8m2!3d10.7830942!4d106.7049007" target="_blank" rel="nofollow"><br class="box_sp mt10">
            <span class="googlemap">[ Googlemap &gt; ]</span></a></p>
          <p class="addressfooter"><a href="tel:0909151109">Hotline: 0909151109 Ms. Lê Nhiên</a></p>
          <p class="addressfooter"><a href="mailto:info.ttglancaster@gmail.com">Email: info.ttglancaster@gmail.com</a></p>
        </div>
        <div id="footer_link">
          <ul>
            <li>- <a href="../../lancasterlincoln.html">Lancaster LinColn</a></li>
            <li>- <a href="../../villa.html">E6 Villa</a></li>
            <li>- <a href="../../citadel.html">Citadel</a></li>
            <li>- <a href="../../thanhtoan.html">thanh toán</a></li>
            <li>- <a href="../../lienhe.html">liên hệ</a></li>
          </ul>
          <ul>
            <li>- <a href="../../villa.html">E6 Villa</a></li>
            <li>- <a href="../../citadel.html">Citadel</a></li>
            <li>- <a href="../../lancasterlincoln.html">Lancaster LinColn</a></li>
            <li>- <a href="../../thanhtoan.html">thanh toán</a></li>
            <li>- <a href="../../lienhe.html">liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <address>
    2017 &copy; Bản quyền thuộc về TTG Lancaster.
    </address>
  </div>
</div>
<script src="../../js/lightbox-plus-jquery.js"></script>
<script src="../../js/gmaps.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcezxGmT3Kw0EjQJGt7MLvWKTQareVCvY&callback=gmaps.renderAll"></script> 
<script src="../../js/customScrollbar.js" type="text/javascript"></script>
<script src="../../js/top.js" type="text/javascript"></script>

<!-- FS Conversion Analyzer start --> 
<!-- FS Conversion Analyzer end -->
</body>

</html>