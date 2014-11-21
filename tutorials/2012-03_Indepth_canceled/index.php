<head> 
	<title>NetFPGA Training Program 2012</title> 
        <link rel="stylesheet" type="text/css" media="screen" href="http://netfpga.org/styles/mainstyles.css" /> 
</head>

<div id="mastheadContainer">
	<?php
		require_once('../../php/title.php');
	?>
</div>

<div id="mainContentWrapper">
	<div id="mainContent">
		<h1 id="pagename" class="topOfDiv">NetFPGA Training Program 2012</h1>
		<p>
			Learn the NetFPGA 1G platform and how to create projects at a 2-day held at
			<a href="http://stanford.edu/" onclick="link_popup(this, ''); return false;">Stanford University</a>.  The NetFPGA 10G platform will also be intorduced (with limited exercises).
		</p>
		<p>
			<b>Open to:</b> Academics teaching classes with the NetFPGA, and researchers (postdoc or graduate-student) interested in developing new hardware-accelerated network applications.
		</p>
		<p>
			<b>Location:</b> The
			<a href="http://stanford.edu/home/visitors/" onclick="link_popup(this, ''); return false;">Stanford University</a> campus
			located between San Francisco and San Jose in the heart of Silicon Valley.
		</p>
		<p> 	<b>Requirements: </b>Knowledge of Verilog
		<p>
			<b>Dates: </b>Thrusday, March 29 - Friday, March 30, 2012, Time: 9am - 5pm.
		</p>
		<p>
		<b>Presented by</b>: the Stanford NetFPGA Group.
		</p>
		
		<?php require_once('../../php/includes/tutorialabstract.php'); ?>

		<h2>Background</h2>
		<p>
			Attendees will utilize a Linux-based PC equipped with NetFPGA hardware. 
			A basic understanding of Ethernet switching and network routing is expected. 
			Past experience with Verilog is <b>required</b>.
		</p>
		
		<div class="centeredImage"><img src="CIMG6252-NetFPGA_Summercamp_2008a.JPG" width=80%></div><p>

		<div class="centeredImage"><img src="CIMG6253-NetFPGA_Summercamp_2008b.JPG" width=80%></div><p>

<h2>Outline</h2>
<div class="ulWrapper">
<p class="ulHead">Day 1 (Thursday, March 29)</p>
<!--Slides: <a href="http://netfpga.org/tutorials/SummerCamp2011/NetFPGA_2011_Summer_Camp_Day_1_Rev1.ppt">NetFPGA_2011_Summer_Camp_Day_1_Rev1.ppt</a><br />
Slides: <a href="http://netfpga.org/tutorials/SummerCamp2011/NetFPGA_2011_Summer_Camp_Day_1_Rev1.pdf">NetFPGA_2011_Summer_Camp_Day_1_Rev1.pdf</a><br />
-->
<ul>
	<li> Welcome and introductions</li>
	<li> NetFPGA 
		<ul><li> Infrastructure
			<ul><li> Tree</li>
					<li> Build System</li>
					<li> Scripts</li>
			</ul>
		</li>
		<li> Life of a packet through the NetFPGA
      <ul><li> Data and control planes</li>
        <li> Interface to software: Exceptions and Host I/O</li>
      </ul>
    </li>
		<li> Implementation 
			<ul><li> Module Template</li>
					<li> User Data Path</li>
					<li> Write crypto NIC using a static key</li>
			</ul>
		</li>
		<li> Simulation and Debug
			<ul><li> Simulation Functions</li>
					<li> Write and Run Simulations for crypto NIC</li>
			</ul>
		</li>
	</ul>
</li></ul>
<p>
<br/><p class="ulHead">Day 2 (Friday, March 30)</p>
<!--Slides: <a href="http://netfpga.org/tutorials/SummerCamp2011/NetFPGA_2011_Summer_Camp_Day_2_Rev1.ppt">NetFPGA_2011_Summer_Camp_Day_2_Rev1.ppt</a><br />
Slides: <a href="http://netfpga.org/tutorials/SummerCamp2011/NetFPGA_2011_Summer_Camp_Day_2_Rev1.pdf">NetFPGA_2011_Summer_Camp_Day_2_Rev1.pdf</a><br />
-->
<ul>
	<li> NetFPGA (cont.) 
		<ul>
			<li>  Registers
				<ul>
					<li> Explain Register System</li>
					<li> Add XML to define crypto NIC encryption key</li>
					<li> Use Generic Register Module to implement register</li>
					<li> Update Simulations</li>
				</ul>
			</li>
			<li> Build and Test Hardware 
				<ul>
						<li> Build</li>
						<li> Explanation of Hardware Tests</li>
						<li> Write and run Hardware Tests
							<ul>
								<li> Verify value: 0xFFFFFFFF (would invert every bit of every byte of payload)</li>
								<li> Verify value: 0xFF00FF00 (would invert every other byte of payload)</li>
								<li> Verify value: 0x55555555 (would invert every other bit of payload)</li>
							</ul>
						</li>
				</ul>
			</li>
			<li> Writing Software and Integration
				<ul>
					<li> Write setkey.c/getkey.c to write/read registers</li>
					<li> Test between adjacent computers</li>
				</ul>
			</li>
		</ul>
		<li> NetFPGA 10G  
			<ul>
				<li>Overview</li>
			</ul>
		</li>
</ul>
</div>

<a name="Background_Reading"></a><h1> <span class="mw-headline"> Background Reading </span></h1>
<ul>
<ul><li> <a href="http://NetFPGA.org">NetFPGA Website</a>
</li><li> <a href="http://netfpga.org/foswiki/bin/view/NetFPGA/OneGig/">NetFPGA Wiki</a>
</li><li> <a href="http://netfpga.org/foswiki/bin/view/NetFPGA/OneGig/Guide">NetFPGA Guide</a>
</li><li> <a href="http://www.fpga.com.cn/hdl/training/verilog%20reference%20guide.pdf">The Verilog Golden Reference Guide, by Doulos</a>
</li></ul>
</ul>
		<h2>To Attend this Event </h2>
		<div class="ulWrapper">
			<ul>
				<li>
					<p>Mark your calendar with the dates of the event</p>
					<ul>
						<li>Please plan to arrive Wednesday night, March 28</li>
						<li>Please plan to stay through Saturday morning, March 31</li>
					</ul>
					<ul>
						<li>
						<p>Registration fee covers shared meals (all breakfasts, lunches)</p>
							<ul>
								<li>Registration Fee: 
									<ul>
										<li>$125</li>
									</ul>
								</li>
								<li>Register: <a href="http://www.certain.com/system/profile/form/index.cfm?PKformID=0x12285797d70">Registration Site</a></li>
								<li>Registration Deadline: March 5th</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<p>Travel Information</p>
					<ul>
						<li>Direct flights are available to most parts of the country through SFO or SJC</li>
						<li>
							<a href="http://www.caltrain.com/caltrain_map.html" onclick="link_popup(this, ''); return false;">CalTrain</a>
							offers fast transportation between the airports and Palo Alto
						</li>
						<li>The <a href="http://transportation.stanford.edu/marguerite/MargueriteShuttle.shtml"
							onclick="link_popup(this, ''); return false;">Marguerite Shuttle</a> offers rides between the train station,
							hotel, and campus.  No car rental is needed.
						</li>
					</ul>
				</li>
				<li>
					<p>
						Book accomodations: 
						<a href="http://www.destinationpaloalto.com/pages/lodging.php?visitor_info_id=8"
							onclick="link_popup(this, ''); return false;">Palo Alto Lodgings</a>
					</p>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
	require_once('../../php/includes/sitemap.php');
	require_once('../../php/includes/footer.php');
	require_once('../../php/includes/google_analytics.php');
?>

