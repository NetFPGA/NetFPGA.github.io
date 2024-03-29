<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" 
    dir="ltr" lang="en-US"> 
 
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
 
<title>NetFPGA instructional videos</title> 
 
<meta name="title" content="Instructional Videos - NetFPGA" /> 
<meta name="description" content="Instructional videos for the NetFPGA Platform" /> 
<meta property="og:title" content="NetFPGA instructional videos"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.netfpga.org/videos/"/>
    <meta property="og:image" content="http://www.netfpga.org/images/NetFPGA_logo_135x135.png"/>
    <meta property="og:site_name" content="NetFPGA"/>
    <meta property="og:description"
          content="Instructional videos for the NetFPGA Platforms."/>
<link rel="stylesheet" type="text/css" href="css/grid.css" /> 
 
<link rel='index' title='NetFPGA' href='http://www.netfpga.org/videos/' /> 
<link rel='canonical' href='http://www.netfpga.org/videos/' /> 
<link rel="stylesheet" type="text/css" media="screen" href="css/mainstyles.css" /> 
    
<?php

  $vid_array = array(
	//Main Intro Tutorials
	0 => "4-Yw4sa8Re8", 
	1 => "ls-82aO6MKw",
	2 => "HNjGgMRjR0g",
	3 => "xU5DM5Hzqes",
	4 => "vQMytm9LD1c", 
	5 => "fK5wOndeP1U",
	//Project videos
	6 => "y3mkhUq-cO4",
	7 => "XWsV3ONfNyo"
	);

  $view_array = array();

    function parseVideoEntry($entry) {      
      $obj= new stdClass;

      // get <yt:stats> node for viewer statistics
      $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
      $attrs = $yt->statistics->attributes();
      $obj->viewCount = $attrs['viewCount']; 

      // return object to caller  
      return $obj->viewCount;      
    } 

  for ($i = 0; $i < count($vid_array); $i++) {
    // set video data feed URL
    $feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $vid_array[$i];

    // read feed into SimpleXML object
    $entry = simplexml_load_file($feedURL);
    
    // parse video entry
    $view_array[$i] = parseVideoEntry($entry);	
  }
?>  

<!-- toolTip --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js"></script>
<script type="text/javascript"> 
    $jq142 = jQuery.noConflict(true);
    $jq142("#demo img[title]").tooltip();
</script> 

<!-- prettyPhoto --> 
<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
	    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'dark_rounded',slideshow:2000, autoplay_slideshow: false});
	    $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
animationSpeed:'fast',
theme:'facebook',
autoplay: true,
slideshow:10000,
});

	    $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
changepicturecallback: function(){ initialize(); }
});

	    $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
custom_markup: '<div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
changepicturecallback: function(){ _bsap.exec(); }
});
	    });


	/* Youtube settings */
    function onYouTubePlayerReady(playerId) {
	ytplayer = document.getElementById("ytplayer");
	ytplayer.setPlaybackQuality("large");
    }
	</script>

</head> 

<body> 

<div id="mastheadContainer"> 
	<?php require('../_includes/header.html'); ?>
</div> 
<div id="navbt"></div>
<div id="mainContentWrapper">

	<table width="815" height="77" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="565" height="64"><div align="center"><a href="#IntroductoryTutorial">Introductory Tutorial</a>&nbsp;&nbsp; <a href="#Project">Project Videos</a>&nbsp;&nbsp; </div></td>
          </tr>
        </table>
	
    <div id="mainContent">

	    <div class="entry"> 
		<h1 style="display:inline; padding-right: 10px;"><a name="IntroductoryTutorial"></a>Introductory Tutorial</h1><a href="">Top</a> 

		<!-- Dummy div as a fix for a bug in prettyPhoto --> 
		<div class="gallery clearfix">
		</div>

		<p>The following videos step through the Introductory Tutorial. It is recommended you view the videos in order. </p>

		<div id="introTutorial">
		    <div class="portfolio">
			<ul id="grid" class="NoBullet">
			    <li>
			    <div class="gallery clearfix">
				<a rel="prettyPhoto[video]" title="An Introduction to the NetFPGA Platform." href="http://www.youtube.com/embed/4-Yw4sa8Re8?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/introduction-thumb.jpg" alt="Section I: Introduction" /></a><b>Section I: <br/>Introduction</b></br><i><?php echo $view_array[0]; ?> views</i>

			    </div>
			    </li>
			    <li>
			    <div class="gallery clearfix">
				<a rel="prettyPhoto[video]" title="A description of the NetFPGA Platforms." href="http://www.youtube.com/embed/ls-82aO6MKw?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/hardware_overview-thumb.jpg" alt="Hardware Overview" /></a><b>Section II: <br/>Hardware Overview</b></br><i><?php echo $view_array[1]; ?> views</i>
			    </div>
			    </li>
			    <li>
			    <div class="gallery clearfix">
				<a rel="prettyPhoto[video]" title="A brief review of IP and Routing." href="http://www.youtube.com/embed/HNjGgMRjR0g?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/network_review-thumb.jpg" alt="IP/Routing Recap" /></a><b>Section III: <br/>IP/Routing Review</b></br><i><?php echo $view_array[2]; ?> views</i>
			    </div>
			    </li>
			    <li>
			    <div class="gallery clearfix">
				<a rel="prettyPhoto[video]" title="Example of the Reference Router operating with PW-OSPF." href="http://www.youtube.com/embed/xU5DM5Hzqes?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1&disablekb=1&playerapiid=ytplayer"><img src="images/videos/example_1-thumb.jpg" alt="Example 1: Reference Router" /></a><b>Section IV: <br/>Example 1 <br/>Reference Router</b></br><i><?php echo $view_array[3]; ?> views</i>
			    </div>
			    </li>
			    <li>
                            <div class="gallery clearfix">
                                <a rel="prettyPhoto[video]" title="Description of how to get started and what to do next." href="http://www.youtube.com/embed/vQMytm9LD1c?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/example_2-thumb.jpg" alt="Buffer Sizing" /></a><b>Section V: <br/>Example 2 <br/> Buffer Sizing</b></br><i><?php echo $view_array[4]; ?> views</i>
                            </div>
                            </li>
			    <li>
			    <div class="gallery clearfix">
				<a rel="prettyPhoto[video]" title="Description of how to get started and what to do next." href="http://www.youtube.com/embed/fK5wOndeP1U?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/what_next-thumb.jpg" alt="Where to get started" /></a><b>Section VI: <br/>Where to get started/ <br/> What to do next</b></br><i><?php echo $view_array[5]; ?> views</i>
			    </div>
			    </li>
			</ul>
		    </div>
		</div>

	    </div> 

	    <div class="entry">
		<!-- Dummy div as a fix for a bug in prettyPhoto -->
                <div class="gallery clearfix">
                </div>

                <h1 style="display:inline; padding-right: 10px;"><a name="Project"></a>Project Videos</h1><a href="">Top</a>

                <p>The following videos are from projects using the NetFPGA. </p>

                <div id="projects">
                    <div class="portfolio">
                        <ul id="grid" class="NoBullet">
                            <li>
                            <div class="gallery clearfix">
                                <a rel="prettyPhoto[projects]" title="Buffer Sizing in Internet Routers" href="http://www.youtube.com/embed/y3mkhUq-cO4?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/buffer_sizing-thumb.jpg" alt="Buffer Sizing in Internet Routers" /></a><b>Buffer Sizing in Internet Routers</b></br><i><?php echo $view_array[6]; ?> views</i>
                            </div>
                            </li>
			    <li>
			    <div class="gallery clearfix">
				<a rel="prettyPhoto[projects]" title="OpenPipes is a platform for building distributed hardware systems. Hardware modules, which may reside in different physical chips, are plumbed together using an OpenFlow network as the interconnect." href="http://www.youtube.com/embed/XWsV3ONfNyo?iframe=true&hd=1&hl=es&fs=1&rel=0&autoplay=1&enablejsapi=1&disablekb=1"><img src="images/videos/openpipes-thumb.jpg" alt="Open Pipes: Plumbing with OpenFlow in Hardware System Design" /></a><b>Open Pipes: Hardware System <br/>Design with OpenFlow</b></br><i><?php echo $view_array[7]; ?> views</i>
			    </div>
			    </li>
			</ul>
		</div>
	   </div>
 

    </div>

<?php
        require('footer.php');
?>

</body>
</html>
