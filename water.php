<?include "./include/head.php";?>
<!--레프트 현황 펼침메뉴 스크립트-->

<script type="text/javascript" src="js/common.js"></script>
<!--슬라이딩메뉴 스크립트 end-->
</head>
<body>
<div id="wrapper">
  <!--탑 타이틀-->
<!--<?include "./include/header.php";?>-->
    <div id="top">
        <div class="logo"><img src="images/main_logo.png" alt="메인로고" /></div>
        <div id="title"><img src="images/main_title.png" alt="메인타이틀" /></div>
        <div class="page">수위현황</div>
        <div class="date">2015년 07월 16일 11시10분 현재</div>
    </div>
  <!--탑 타이틀 끝-->

    <!--좌측네비게이션-->
<?include "./include/left.php";?>


  <!--지도 구분 버튼-->
	<div id="btn_m">
		<ul>
		<li><img src="images/btn_m_01_off.png" class="rollover" /></li>
		<li><img src="images/btn_m_02_off.png" class="rollover" /></li>
        <li><img src="images/btn_m_03_off.png" class="rollover" /></li>
		</ul>
	</div>
  <!--지도 구분 버튼 끝-->
  <!--영상컨트롤러-->
  <!--<div class="cont">
        <ul>
        <li><span class="cont_title">영상컨트롤러</span></li>
        <li>
          <div class="cont_play">
          <div class="cont_bar">●</div>
          <div class="cont_bar">
            <ul>
              <li>13:30</li>
              <li>13:40</li>
              <li><span class="cont_hl">13:50</span></li>
              <li>14:00</li>
              <li>14:10</li>
              <li>14:20</li>
              <li>14:30</li>
              <li>14:40</li>
            </ul>
          </div>
          </div>
          </li>
        <li>
          <img class="rollover" src="images/btn_cont_s_off.png" alt="재생"><img class="rollover" src="images/btn_cont_p_off.png" alt="정지">
        </li>
        </ul>
    </div>
  -->
  <!--영상컨트롤러 끝-->
  <!--마우스오버 툴팁-->
  <!--<div class="tooltip">
    <ul>
    <li><div class="tooltip_top">동이면</div></li>
    <li><div class="tooltip_val">21cm</div></li>
    <li><div class="tooltip_time">2014-02-20 19:20:15</div></li>
    </ul>
    </div>
  -->
  <!--마우스오버 툴팁 끝-->
  <!--예보 날씨 툴팁-->
  <!--  <div class="fore_tt">
      <div class="fore_tt_top">
          <div class="fore_tt_white">동이면</div>
          <div class="fore_tt_gray">2015. 10. 02 14:00 발표</div>
          <div class="fore_tt_top_icon"><img src="images/weather_icon_14.png" alt="뇌우" /></div>
          <div class="fore_tt_yellow">구름조금 | 25℃</div>
      </div>
      <div class="fore_tt_bot">
        <ul>
        <li>
          <div class="fore_tt_bot_icon"><img src="images/weather_icon_03.png" alt="구름많음" /></div>
          <div class="fore_tt_bot_temp">25℃</div>
          <div class="fore_tt_bot_gray">구름많음<br/>강수확률 20%</div>
          <div class="fore_tt_bot_time">오늘오후</div>
        </li>
        <li>
          <div class="fore_tt_bot_icon"><img src="images/weather_icon_02.png" alt="흐림" /></div>
          <div class="fore_tt_bot_temp">25℃</div>
          <div class="fore_tt_bot_gray">구름많음<br/>강수확률 20%</div>
          <div class="fore_tt_bot_time">내일오전</div>
        </li>
        <li>
          <div class="fore_tt_bot_icon"><img src="images/weather_icon_11.png" alt="흐리고비" /></div>
          <div class="fore_tt_bot_temp">25℃</div>
          <div class="fore_tt_bot_gray">구름많음<br/>강수확률 20%</div>
          <div class="fore_tt_bot_time">내일오후</div>
        </li>
        </ul>
      </div>
      <div class="fore_tt_pointer"></div>
    </div>-->
  <!--예보 날씨 툴팁 끝-->
  <!--태풍 범례-->
  <!--<div class="legend_tp"><img src="images/legend_typoon.jpg" width="322" height="49" alt="태풍범례"></div>-->
	<!--지도표시영역-->
	<div id="con">
	<?php include 'map_water.html'; ?>
	</div>
	<!--지도표시 끝-->
</div><!--Wrapper 끝-->
<!--슬라이더 div-->
<div id="con_forec"><?php include 'test.html'; ?></div>
<div id="con_nowr"><?php include 'test1.html'; ?></div>
<!--슬라이더 div 끝-->
</body>
</html>
