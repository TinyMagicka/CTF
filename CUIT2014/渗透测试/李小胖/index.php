<?php
error_reporting(0);
@$id = $_GET['id'];

?>
<!DOCTYPE html>
<!-- saved from url=(0035) -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ettercap Home Page</title>

<meta http-equiv="X-UA-Compatible" content="IE=100"> <!-- Force IE8 Compatibility mode OFF -->
<link rel="stylesheet" href="./Ettercap Home Page_files/style.css" type="text/css">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">

<style id="clearly_highlighting_css" type="text/css">/* selection */ html.clearly_highlighting_enabled ::-moz-selection { background: rgba(246, 238, 150, 0.99); } html.clearly_highlighting_enabled ::selection { background: rgba(246, 238, 150, 0.99); } /* cursor */ html.clearly_highlighting_enabled {    /* cursor and hot-spot position -- requires a default cursor, after the URL one */    cursor: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--cursor.png") 14 16, text; } /* highlight tag */ em.clearly_highlight_element {    font-style: inherit !important; font-weight: inherit !important;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow.png");    background-repeat: repeat-x; background-position: top left; background-size: 100% 100%; } /* the delete-buttons are positioned relative to this */ em.clearly_highlight_element.clearly_highlight_first { position: relative; } /* delete buttons */ em.clearly_highlight_element a.clearly_highlight_delete_element {    display: none; cursor: pointer;    padding: 0; margin: 0; line-height: 0;    position: absolute; width: 34px; height: 34px; left: -17px; top: -17px;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite.png"); background-repeat: no-repeat; background-position: 0px 0px; } em.clearly_highlight_element a.clearly_highlight_delete_element:hover { background-position: -34px 0px; } /* retina */ @media (min--moz-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2) {    em.clearly_highlight_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow@2x.png"); }    em.clearly_highlight_element a.clearly_highlight_delete_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite@2x.png"); background-size: 68px 34px; } } </style><style type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>
<body>

<div id="header">
	<div id="logo">
		<a href="#"><img src="./Ettercap Home Page_files/logo.png" alt="logo"></a>
	</div>
</div>

<h1><a href="#">Ettercap Home Page</a></h1>

<div class="container">

<div id="digi-nav">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Downloads</a></li>
		<li><a href="#">Get Involved</a></li>
		<li><a href="index.php?id=1">Bug Submission</a></li>
		<li><a href="#">Forums</a></li>
	</ul>
</div>


<div id="content">

		
	<div class="post">
<h2>Welcome to the Ettercap Project</h2>
	<div class="entry">
	
	<blockquote><span><p>
	<?php
	
	if(isset($id)){
		
		$conn = mysql_connect('localhost','syclover','myclover');
		mysql_select_db('cuitjwc');

		$sql = 'select * from cuit_classes where classid='.$id;

		$sql = preg_replace('/limit.+/i','',$sql);

		//echo $sql;

		$query = mysql_query($sql);

		$result = mysql_fetch_assoc($query);

		echo $result['name'];
		
	}else{
		echo 'Ettercap is a comprehensive suite for man in the middle attacks. It features sniffing of live connections, content filtering on the fly and many other interesting tricks. It supports active and passive dissection of many protocols and includes many features for network and host analysis.';
	}
	
	
	?>
	</p></span>
	</blockquote>
	
		
	<br class="clear">
		
		
	</div><!-- end entry -->
	</div><!-- end post -->
</div><!-- end content -->

<div id="footer">
	<div id="footer-container">
	<span class="right"><a href="#">© Ettercap Project</a> | <a href="http://www.ticktockcomputers.com/" target="_blank" title="Designed by DigiP">Theme by Tick Tock Computers, LLC</a></span>
	</div>
</div><!-- end footer -->

</div><!-- end container -->
<div class="fixed-side">
<img src="./Ettercap Home Page_files/open-source.jpg" alt="open-source" title="This project 100% Open-Source, for the community, and by the community." style="position:relative; right:6px;">
<br><br>
<a href="https://twitter.com/ettercapproject"><img src="./Ettercap Home Page_files/Twitter-64.png" alt="" title="Follow us on Twitter"></a>
</div>


</body></html>