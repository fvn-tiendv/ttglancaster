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
<title>Trung Thủy Group Lancaster</title>
<meta name="keywords" content="Lancaster trung thủy, lincoln, lincoln quận 4, mis áo dài, citadel, E6 villas" />
<meta name="description" content="trung thủy group, trung thủy lancaster, trung thủy land, 21 nguyễn trung ngạn q1, tòa nhà mis áo dài, lincoln, lincoln quận 4, citadel, e6 villas,  dương thanh thủy, bất động sản, văn phòng OFFICETEL, căn hộ cao cấp" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="shortcut icon" href="../images/logo-altico.png" type="image/x-icon" />
<link rel="icon" href="../images/logo-altico.png" type="image/x-icon" />
<meta name="msvalidate.01" content="604FCBBC33A980B03391586F5EF170A1" />
<link  href="../css/styles.css" rel="stylesheet" type="text/css" />
<link  href="../css/style_sp.css" rel="stylesheet" type="text/css" />
<link  href="../css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="../css/under.css" rel="stylesheet" type="text/css" />
<link  href="../css/under_responsive.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.scroll.js" type="text/javascript"></script>
<script src="../js/common.js" type="text/javascript"></script>
<script src="../js/top.js" type="text/javascript"></script>
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
        <h1><a href="http://ttglancaster.vn/"><img src="../images/logo-alt.svg" width="160" alt="Lancaster LinColn Citadel E6 Villas"></a></h1>
        <ul class="btn box_pc">
          <li><a href="tel:0909151109"><span>HOTLINE TRUNG THỦY LAND</span>0909 151 109</a></li>
        </ul>
      </div>
      <p id="nav-icon4" class="box_sp"><span></span> <span></span><span></span></p>
      <div id="gnavi_sp" class="box_sp">
        <ul>
          <li><a href="http://ttglancaster.vn/">TRANG CHỦ</a></li>
          <li><a href="../gioithieu.html">giới thiệu</a></li>
          <li><a href="../news/index.php">tin tức</a></li>
          <li class="sub"><span class="btn_sub">dự án</span>
            <ul class="sub_menu">
              <li><a href="../lancasterlincoln.html">Lancaster Lincoln</a></li>
              <li><a href="../citadel.html">Citadel Residence</a></li>
              <li><a href="../villa.html">E6 Villa</a></li>
            </ul>
          </li>
          <li><a href="../thanhtoan.html">thanh toán</a></li>
          <li><a href="../lienhe.html">liên hệ</a></li>
        </ul>
      </div>
    </div>
    <div id="gnavi" class="clearfix box_pc">
      <div class="inner clearfix">
        <ul class="list_menu">
          <li><a href="http://ttglancaster.vn/"><img src="../images/gnavi_home.png" width="22" alt="HOME"></a></li>
          <li><a href="../gioithieu.html">giới thiệu</a></li>
          <li><a href="../news/index.php">tin tức</a></li>
          <li class="sub"><a href="#">dự án</a>
            <ul class="submenu">
              <li><a href="../lancasterlincoln.html">Lancaster Lincoln</a></li>
              <li><a href="../citadel.html">Citadel Residence</a></li>
              <li><a href="../villa.html">E6 Villa</a></li>
            </ul>
          </li>
          <li><a href="../thanhtoan.html">thanh toán</a></li>
          <li><a href="../lienhe.html">liên hệ</a></li>
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
          <h2><?php echo $base_title; ?></h2>
        </div>
      </div> 
    </div>
   <div class="inner clearfix">
     <div id="topic_path" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li><a href="http://ttglancaster.vn">Trang chủ</a><span>&nbsp;&gt;</span></li>
          <li><?php echo $base_title; ?></li>
        </ul>
      </div>
    </div>
    <!-- top_info end --> 
     
    <!-- content start -->
    <div id="content"> 
     <!-- inner start -->
      <div class="inner">
        <h3>TIN TỨC</h3>
        <!-- *********   Load category   ********* -->
            <ul class="btn01">
              <?php
	$category_index=get_category_index();
	foreach($category_index as $rowid=>$id){
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$id.'.dat'));
		$category_url=$category_data['id'];
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$category_id=$id;
		${'category'.$id.'_url'}=$category_data['id'];
		${'category'.$id.'_name'}=$category_data['name'];
		${'category'.$id.'_text'}=@$category_data['text'];
		$selected=(@$_GET['c']==$id?' selected="selected"':'');

?>
                <li> <a href="<?php echo $category_url; ?>/"><?php echo $category_name; ?></a> </li>
              <?php
	}
?>
            </ul>
            
            <!-- *********    / Load category ********* --> 
        
        <!-- *********   POSTS   ********* -->
        
        <div class="section clearfix">
          <ul class="tb_cate">
            <?php $limitNum = 6 ?>
            <?php
	$contribute_index=contribute_search(
		@$current_category_id
		,''
		,''
		,''
		,''
		,''
	);
	$max_record_count=count($contribute_index);

	$current_page=(@$_GET['p'])?(@$_GET['p']):1;
	$contribute_index=array_slice($contribute_index,($current_page-1)*$limitNum,$limitNum);
	$record_count=count($contribute_index)

?>
              <?php
	$local_index=0;
	foreach($contribute_index as $rowid=>$index){
		$contribute=unserialize(@file_get_contents(DATA_DIR.'/contribute/'.$index['id'].'.dat'));
		$title=$contribute['title'];
		$url=$contribute['url'].'/';
		$category_id=$index['category'];
		$category_data=unserialize(@file_get_contents(DATA_DIR.'/category/'.$category_id.'.dat'));
		$category_name=$category_data['name'];
		$category_text=@$category_data['text'];
		$field_id=$index['field'];
		$date=$index['public_begin_datetime'];
		$id=$index['id'];
		$field=get_field($field_id);

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
		$local_index++;

?>
                <li>
                  <p class="col_cate"><span class="cate0<?php echo $category_id; ?>"><?php echo $category_name; ?></span><span class="tb_date"><?php echo $date; ?></span></p>
                  <p class="blog_tt"><a href="<?php echo $url; ?>"><?php echo mb_strimwidth($title, 0, 100, '…', 'UTF-8'); ?></a></p>
                  <p class="img_blog"><a href="<?php echo $url; ?>">
                    <?php
	if($img_01_Value){
?> <img src="<?php echo $img_01_Src; ?>" alt="<?php echo $title; ?>" />
                      <?php
	}else{
?>
                      <img src="../images/under_img_02.jpg" alt="<?php echo $title; ?>" /> <?php
	}
?>
                    </a> </p>
                </li>
              <?php
		foreach($field as $field_index=>$field_data){
			unset(${$field_data['code'].'_Name'});
			unset(${$field_data['code'].'_Value'});
			unset(${$field_data['code'].'_Src'});
		}
	}
?>
            
          </ul>
        </div> 
        
         <!-- *********   PAGINATION   ********* -->
        
        <?php
	$page_count=(int)ceil($max_record_count/(float)$limitNum);
?>
          <?php
	if($max_record_count > $limitNum){
?>
            <div class="section clearfix">
              <ul class="pagination">
                <?php
	if($current_page <= 1){
?>
                  <li class="disabled"><a href="#">&lt;&lt;</a></li>
                  <?php
	}else{
?>
                  <li><a href="./?p=<?php echo $current_page-1; ?>">&lt;&lt;</a></li>
                <?php
	}
?>
                <?php
	$page_old=@$page;
	for($page=1;$page<=$page_count;$page++){
?>
                  <?php
	if($current_page == $page){
?>
                    <li class="active"><a href="#"><?php echo $page; ?></a></li>
                    <?php
	}else{
?>
                    <li><a href="./?p=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                  <?php
	}
?>
                <?php
	}
$page=$page_old;
?>
                <?php
	if($current_page*$limitNum < $max_record_count){
?>
                  <li><a href="./?p=<?php echo $current_page+1; ?>">&gt;&gt;</a></li>
                  <?php
	}else{
?>
                  <li class="disabled"><a href="#">&gt;&gt;</a></li>
                <?php
	}
?>
              </ul>
            </div>
          <?php
	}
?>
        
        </div>
        <!-- *********    /PAGINATION ********* --> 
       
        </div>
    </div>
    <!-- content end --> 
    
    
  </div>
  <!-- main end -->
  
  <div id="footer">
    <p id="toTop"><a href="#wrapper"><img src="../images/totop.png" width="60" alt="TOP"></a></p>
    <div id="footer_info">
      <div class="inner clearfix">
        <div id="footer_infoct">
          <p id="logofooter" class="clearfix"><a href="http://ttglancaster.vn"><img src="../images/logo-altf.svg" width="160" alt="ttglancaster"></a></p>
          <p class="addressfooter clearfix">21 Nguyễn Trung Ngạn, Quận 1, TP. HCM <a href="https://www.google.com/maps/place/Miss+Ao+Dai+Shopping+Center-Fine+Art%26+Handicrafts/@10.7825218,106.7037072,18z/data=!4m8!1m2!3m1!2sMiss+Ao+Dai+Shopping+Center-Fine+Art%26+Handicrafts!3m4!1s0x0000000000000000:0xa1c963d101dfca56!8m2!3d10.7830942!4d106.7049007" target="_blank" rel="nofollow"><br class="box_sp mt10">
            <span class="googlemap">[ Googlemap &gt; ]</span></a></p>
          <p class="addressfooter"><a href="tel:0909151109">Hotline: 0909151109 Ms. Lê Nhiên</a></p>
          <p class="addressfooter"><a href="mailto:info.ttglancaster@gmail.com">Email: info.ttglancaster@gmail.com</a></p>
        </div>
        <div id="footer_link">
          <ul>
            <li>- <a href="../lancasterlincoln.html">Lancaster LinColn</a></li>
            <li>- <a href="../villa.html">E6 Villa</a></li>
            <li>- <a href="../citadel.html">Citadel</a></li>
            <li>- <a href="../thanhtoan.html">thanh toán</a></li>
            <li>- <a href="../lienhe.html">liên hệ</a></li>
          </ul>
          <ul>
            <li>- <a href="../villa.html">E6 Villa</a></li>
            <li>- <a href="../citadel.html">Citadel</a></li>
            <li>- <a href="../lancasterlincoln.html">Lancaster LinColn</a></li>
            <li>- <a href="../thanhtoan.html">thanh toán</a></li>
            <li>- <a href="../lienhe.html">liên hệ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <address>
    2017 &copy; Bản quyền thuộc về TTG Lancaster.
    </address>
  </div>
</div>
<!-- FS Conversion Analyzer start --> 
<!-- FS Conversion Analyzer end -->
</body>
</html>