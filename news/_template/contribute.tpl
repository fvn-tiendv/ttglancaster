<!Doctype html>
<html lang="vn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<ONContribute id="$contribute_id">
<title>{=$title=}｜{=$base_title=}</title>
<ONIf condition="$description_Value">
  <meta name="description" content="{=$description_Value=}" />
  <ONElse>
  <meta name="description" content="" />
</ONIf>
<ONIf condition="$keywords_Value">
  <meta name="keywords" content="{=$keywords_Value=}" />
  <ONElse>
  <meta name="keywords"  content="" />
</ONIf>
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
        <h2>{=mb_strimwidth($title, 0, 45, '…', 'UTF-8')=}</h2>
      </div>
    </div>
  </div>
  <div class="inner clearfix">
    <ul id="topic_path">
      <li><a href="http://ttglancaster.vn">Trang chủ</a>&nbsp;&nbsp;&gt;&nbsp;</li>
      <li><a href="../">{=$base_title=}</a>&nbsp;&gt;&nbsp;</li>
      <li><a href="../{=$category_url=}/">{=$category_name=}</a>&nbsp;&gt;&nbsp;</li>
      <li>{=mb_strimwidth($title, 0, 90, '…', 'UTF-8')=}</li>
    </ul>
    
    <!-- top_info end --> 
    
    <!-- content start -->
    <div id="content"> 
      <!-- inner start -->
      <div class="inner">
			<div class="section clearfix">
            <ONIf condition="$img_01_Value">
              <p class="img_blog_lg"><a class="example-image-link" href="{=$img_01_Src=}" data-lightbox="example-1"><img src="{=$img_01_Src=}" alt="{=$title=}" class="example-image" /></a></p>
            </ONIf>
          </div>
      </div>
      <div class="inner"> 
        <!--section02 end-->
        <?php if($content02_Value!=""||$img_02_Value!=""||$img_03_Value!=""||$img_04_Value!=""){  ?>
        <ONIf condition="$content02_Value">
          <h4>{=$content02_Value=}</h4>
        </ONIf>
        <div class="section clearfix">
          <ul class="img_blog01">
            <ONIf condition="$img_02_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_02_Src=}" data-lightbox="example-1"><img src="{=$img_02_Src=}" alt="{=$title=}" class="example-image" /></a> </p>
              </li>
            </ONIf>
            <ONIf condition="$img_03_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_03_Src=}" data-lightbox="example-1"><img src="{=$img_03_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
            <ONIf condition="$img_04_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_04_Src=}" data-lightbox="example-1"><img src="{=$img_04_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
          </ul>
        </div>
        <?php }?>
        
        <!--section03 end-->
        <?php if($content03_Value!=""||$content04_Value!=""||$img_05_Value!=""||$img_06_Value!=""||$img_07_Value!=""){  ?>
        <ONIf condition="$content03_Value">
          <h4>{=$content03_Value=}</h4>
        </ONIf>
        <div class="section clearfix">
          <ONIf condition="$content04_Value">
            <p>{=$content04_Value=}</p>
          </ONIf>
          <ul class="img_blog01">
            <ONIf condition="$img_05_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_05_Src=}" data-lightbox="example-1"><img src="{=$img_05_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
            <ONIf condition="$img_06_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_06_Src=}" data-lightbox="example-1"><img src="{=$img_06_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
            <ONIf condition="$img_07_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_07_Src=}" data-lightbox="example-1"><img src="{=$img_07_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
          </ul>
        </div>
        <?php }?>
        
        <!--section03 end-->
        <?php if($content05_Value!=""||$content06_Value!=""||$img_08_Value!=""||$img_09_Value!=""||$img_10_Value!=""){  ?>
        <ONIf condition="$content05_Value">
          <h4>{=$content05_Value=}</h4>
        </ONIf>
        <div class="section clearfix">
          <ONIf condition="$content06_Value">
            <p>{=$content06_Value=}</p>
          </ONIf>
          <ul class="img_blog01">
            <ONIf condition="$img_08_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_08_Src=}" data-lightbox="example-1"><img src="{=$img_08_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
            <ONIf condition="$img_09_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_09_Src=}" data-lightbox="example-1"><img src="{=$img_09_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
            <ONIf condition="$img_10_Value">
              <li>
                <p><a class="example-image-link" href="{=$img_10_Src=}" data-lightbox="example-1"><img src="{=$img_10_Src=}" alt="{=$title=}" class="example-image" /></a></p>
              </li>
            </ONIf>
          </ul>
        </div>
        <?php }?>
        <div class="section clearfix">
          <p class="center btn_right mb0"><a href="../{=$category_url=}/" class="btn-default">TIN TỨC &gt;</a></p>
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
</ONContribute>
</html>