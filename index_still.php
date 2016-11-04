<!DOCTYPE html>
<meta charset="euc-kr">
<head>
<title>(주)화진티엔아이 통합방재시스템 지도상황판</title>
<link rel="stylesheet" type="text/css" href="css/common.css">
  <link href="./css/examples.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<!--flot S//-->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="flot/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="flot/jquery.flot.time.js"></script>
<script type="text/javascript" src="flot/jshashtable-2.1.js"></script>
<script type="text/javascript" src="flot/jquery.numberformatter-1.2.3.min.js"></script>
<script type="text/javascript" src="flot/jquery.flot.symbol.js"></script>
<script type="text/javascript" src="flot/jquery.flot.axislabels.js"></script>


<!-- this plugin -->
<!--flot E//-->

<script type="text/javascript" src="js/jquery.sidr.min.js"></script>

<!--[if IE 6]>
<script src="js/DD_belatedPNG.js"></script>
<script>
  DD_belatedPNG.fix('img, .png_bg');
</script>
<![endif]-->
<!--레프트 현황 펼침메뉴 스크립트-->
<script type="text/javascript">
//<![CDATA[
function leftToggle(lefts){
var leftsub = document.getElementById(lefts);
if(leftsub.style.display=="block"){
	leftsub.style.display="none";
		}
		else{leftsub.style.display="block";
		}
}
//]]>
</script>
<!-- 레프트 현황 펼침메뉴 스트립트 끝-->
<!--이미지롤오버 스크립트-->
<script type="text/javascript">
 $(document).ready(function() { $("img.rollover").hover( function() { this.src = this.src.replace("_off", "_on"); }, function() { this.src = this.src.replace("_on", "_off"); }); });
</script>
<!--이미지롤오버스크립트 end-->
<!--슬라이딩메뉴 스크립트-->
<script>
/*슬라이더호출*/
$(document).ready(function() {
    $('#slider_forec').sidr({
      name: 'con_forec',
      source: '#con_forec'
    });
});/*예보*/
$(document).ready(function() {
    $('#slider_nowr').sidr({
      name: 'con_nowr',
      source: '#con_nowr'
    });
});/*현황*/

/*창닫기버튼*/
$(document).ready(function() {
	$('.sidr-class-btn_close').click(function() {
	$.sidr('close', 'con_forec');
	});
});/*예보*/
$(document).ready(function() {
	$('.sidr-class-btn_close').click(function() {
	$.sidr('close', 'con_nowr');
	});
});/*현황*/
</script>
<!--슬라이딩메뉴 스크립트 end-->
</head>
<body>
<div id="wrapper">
  <!--탑 타이틀-->
	<div id="top">
		<div class="logo"><img src="images/main_logo.png" alt="메인로고" /></div>
		<div id="title"><img src="images/main_title.png" alt="메인타이틀" /></div>
		<div class="date">2015년 07월 16일 11시10분 현재</div>
	</div>
  <!--탑 타이틀 끝-->
  <!--좌측네비게이션-->
	<div id="left_sidebar">
		<a id="slider_forec" href="#con_forec"><img src="images/leftnav_01_off.jpg" class="rollover" alt="예보"></a>
		<a id="leftToggle" href="#" onclick="leftToggle('left_for'); return false"><!--페이지 인식 필요--><img src="images/leftnav_02_off.jpg" class="rollover" alt="강우현황"></a>
        <img src="images/leftnav_03_off.jpg" class="rollover" alt="레이더">
		<img src="images/leftnav_04_off.jpg" class="rollover" alt="위성">
		<img src="images/leftnav_05_off.jpg" class="rollover" alt="태풍">
		<img src="images/leftnav_06_off.jpg" class="rollover" alt="상황판">
	</div>
  <!--현황 펼침메뉴-->
	<div id="left_for">
        <ul>
        <li><img src="images/leftnav_for_01.png"></li>
        <li><img src="images/leftnav_for_02.png"></li>
        <li><img src="images/leftnav_for_03.png"></li>
        <li><img src="images/leftnav_for_04.png"></li>
        </ul>
	</div>
  <!--현황 펼침메뉴 끝-->

  <!--좌측네비게이션 끝-->


	<!--스틸컷내용표시영역-->
	<div id="con">
	<?php include 'stillcut.html'; ?>
	</div>
	<!--스틸컷내용표시 끝-->
</div><!--Wrapper 끝-->
<!--슬라이더 div-->
<div id="con_forec"><?php include 'test.html'; ?></div>
<div id="con_nowr"><?php include 'test1.html'; ?></div>
<!--슬라이더 div 끝-->
</body>
</html>
