<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://www.flyingbeaglebooks.com/mobile.html');
?>
<html>
<head>
	<title>Flying Beagle Books</title>
	<LINK REL='stylesheet' HREF="../css/menustyle.css" TYPE="text/css" MEDIA=all>
	<LINK REL='stylesheet' HREF="../css/font-awesome.css" TYPE="text/css" TITLE="FontAwesomeIcons"> 
	<LINK REL='stylesheet' HREF="../css/bootstrap.css" TYPE="text/css" TITLE="FontAwesomeIcons">
	<LINK REL='stylesheet' HREF="../css/bootstrap-responsive.css" TYPE="text/css" TITLE="FontAwesomeIcons">
	<LINK REL='stylesheet' HREF="../css/style.css" TYPE="text/css" MEDIA=all>
	
	<script type="text/javascript" src="../css/jquery.js"></script>
	<script type="text/javascript" src="../css/bootstrap.js"></script>
	<script type="text/javascript" src="../css/bootstrap-dropdown.js"></script>
	


</head>
<body>
<!-- background image  -->
<img alt="full screen background image" src="../images/tiledbrick.jpeg" id="bg-image" />


<!-- Header banner  -->
<div id="header">

</div>


<div><!-- menubar-->


<!-- Another Menu Starts //-->
<ul class="ws_css_cb_menu">
  <li>&nbsp;&nbsp;&nbsp;</li>
  <li><a href="http://www.flyingbeaglebooks.com" title="Home"><i class="icon-home"></i> Home</a></li>
  <li><a href="books.html" title="Books"><span><i class ="icon-book"></i> Books</i></span>
    <![if gt IE 6]>
    </a>
    <![endif]>
    <!--[if lte IE 6]><table><tr><td><![endif]-->
    <ul class='ws_css_cb_menum'>
      <li><a href="books.html" title="Our Books">Our Books</a></li>
      <li><a href="http://www.amazon.com/shops/A1O3ZQ7UXCUO3J" target="new" title="Amazon store">Amazon store</a></li>
      <li><a href="localauthors.html" title="Local Authors">Local Authors</a></li>
    </ul>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li><a href="music.html" title="Saxapahw Music"><span><i class="icon-music"></i> Music</span>
    <![if gt IE 6]>
    </a>
    <![endif]>
    <!--[if lte IE 6]><table><tr><td><![endif]-->
    <ul class='ws_css_cb_menum'>
      <li><a href="music.html" title="Available CDs">Available CD's</a></li>
      <li><a href="hrbsched.html" title="Artists at the Haw River Ballroom">Haw River Ballroom</a></li>
      <li><a href="eddysched.html" title="Artists at the Eddy">The Eddy</a></li>
      <li><a href="satsaxsched.html" title="Saturdays schedule">Saturdays in Saxxy</a></li>
    </ul>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <li><a href="saxapahaw.html" title="Search Saxapahaw"><span><i class="icon-leaf"></i> Explore Saxapahaw</span>
    <![if gt IE 6]>
    </a>
    <![endif]>
    <!--[if lte IE 6]><table><tr><td><![endif]-->
    <ul class='ws_css_cb_menum'>
      <li><a href="http://www.hawriverballroom.com/">Haw River Ballroom and Cup 22 <i class="icon-music"></i><i class="icon-glass"></i></a></li>
      <li><a href="http://www.saxgenstore.com/">Saxapahaw General Store <i class="icon-tags"></i><i class="icon-glass"></i></a></li>
      <li><a href="http://theeddypub.com/">The Eddy Pub <i class="icon-music"></i><i class="icon-glass"></i></a></li>
      <li><a href="http://hawriverales.com/">Haw River Farmhouse Ales <i class="icon-glass"></i></a></li>
      <li><a href="http://roxyfarmsantiques.com/">Roxy Farms Antiques <i class="icon-tags"></i></a></li>
      <li><a href="http://www.rivermillvillage.com/">Rivermill Apartments <i class="icon-home"></i></a></li>
      <li><a href="http://www.saxapahawartists.com/">Saxapahaw Artists Gallery <i class="icon-tags"></i></a></li>
      <li><a href="http://hawrivercanoe.com/">Haw River Canoe &amp; Kayak Co. <i class="icon-leaf"></i></a></li>
      <li><a href="http://www.benjaminvineyards.com/">Benjamin Vineyards &amp; Winery <i class="icon-glass"></i></a></li>
      <li><a href="http://www.paperhand.org/index.htm">Paperhand Puppet Intervention <i class="icon-music"></i></a></li>
    </ul>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
  </li>
  <!-- Social buttons   -->
  
  <li id="social">
  <a href="http://www.twitter.com">
  <img src="../images/woodicotwitter.png" /></a></li>
  <li id="social">
  <a href="http://www.facebook.com/flyingbeaglebooks">
  <img src="../images/woodicofacebook.png" /></a></li>
  <li id="social">
  <a href="mailto:flyingbeaglebooks@gmail.com">
  <img src="../images/woodicomail.png" /></a></li>
  <!-- end social buttons in menu -->
  
  
</ul>
<!-- Another Menu Ends //-->


</div><!-- end menubar -->
<br /><br />

<!-- Main Body Content -->

<div id="wrapper"><!-- begin wrapper -->
<h1>Flying Beagle Books</h1><br />
<p>Flying Beagle Books is a second-hand bookstore in the artistic, eclectic, creative community of Saxapahaw, North Carolina. We offer fun and informative books, music, and locally made crafts at a village level for global thinkers. 
</p>

<div id="myCarousel" class="carousel">
  <!-- Carousel items -->
  <div class="carousel-inner" align="center">
    <div class="active item"><img alt="flying beagle flyer" src="../images/flyer.jpg" id="flyer" height=402 align=center /></div>
    <div class="item"><img alt="sellers building" src="../images/sellers.jpg" id="sellersbldg" height=402 align=center /></div>
    <div class="item"><img alt="beagle book" src="../images/beaglebk.jpg" id="flyer" height=402 align=center /></div>
    <div class="item"><img alt="saturdays in sax" src="../images/satsaxsched.jpg" id="satsax" height=402 align=center /></div>
    <div class="item"><img alt="saxapahaw map" src="../images/saxmap.jpg" id="saxmap" height=402 align=center /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
<script type="text/javascript">
$('.carousel').carousel({
});
</script>




<h2>We are open!</h2><br />
<p>Come on by for a chat, set a spell and meet Roswell The Flying Beagle Himself. We are a local 'Mom & Pop' business and truly love our ties to the community and we are always happy to make new friends. See you on Saturdays in Saxapahaw!
</p>
<table><tr>
<td>
<p><h3>Hours:</h3><br />

<!-- nested table to force time alignment -->
<table>
<tr><td>Tue-Thur</td><td align=right>10am-7pm</td></tr>
<tr><td>Fri-Sat</td><td align=right>11am-8pm</td></tr>
<tr><td>Sun</td><td align=right>11am-4pm</td></tr>
<tr><td span=2>Closed Mondays</td></tr>
</table>
<!-- end nested table -->

</p></td>
<td id="table">
<p><h3>Contact Us:</h3><br />
Phone: 315-439-6276<br />
Email: <a href="mailto:flyingbeaglebooks@gmail.com">flyingbeaglebooks@gmail.com</a><br />
1610B Jordan Drive Saxapahaw, NC 27340
</p></td>
</tr>
</table>

<!-- Right sideBar  -->


</div><!-- end wrapper  -->
<!-- Footer Bar -->
<div id="footer">
&copy; Copyright Flying Beagle Books, llc 2012.
</div>
</body>
</html>