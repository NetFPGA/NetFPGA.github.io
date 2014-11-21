<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

        <title>Past and Upcoming Events</title>
        
        <link rel="stylesheet" type="text/css" media="screen" href="css/mainstyles.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/tutorials.css" />
</head>
<body>
<div id="mastheadContainer">
        <?php include('../_includes/header.html'); ?>
</div>
        <div id="navbt"></div>

  <div id="mainContentWrapper" align="center">

      <div id="header" align="center">
				<a name="Top"></a>
        <table width="815" height="77" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="565" height="64"><div align="center"><a href="#Upcoming">Upcoming</a>&nbsp;&nbsp; <a href="#Tutorials">Tutorials</a>&nbsp;&nbsp; <a href="#Camps">Camps</a>&nbsp;&nbsp; <a href="#Dev">Developer's Workshops</a>&nbsp;&nbsp; <a href="#Contests">Contest(s)</a></div></td>
          </tr>
        </table>
      </div></td>
					
	<div id="mainContent">
		<div class="ulWrapper"> 
		<?php require_once('includes/event_content.php');
			echo "<p class=\"vCrunchBottom\">Click <a href=\"events_map.html\">here</a> to view the events map.</p><br/>\n"; 
			# Upcoming
			echo "<h1 style=\"display:inline; padding-left: 10px; padding-right: 10px;\"><a name=\"Upcoming\"></a>Upcoming</h1> <a href=\"\">Top</a>\n";
		
			$upevents = 0; 

			# Upcoming: Tutorials
			if (!empty($tutorial_upcoming)) { 
				echo "<h2>Tutorials</h2>\n\t<ul>\n";
				$max = sizeof($tutorial_upcoming);
				for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$tutorial_upcoming[$i][6]."\">".$tutorial_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$tutorial_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$tutorial_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$tutorial_upcoming[$i][4]."</li>\n";
          if (!($tutorial_upcoming[$i][5])=="") {
              echo "\t\t\t<li>Host: ".$tutorial_upcoming[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$tutorial_upcoming[$i][6]."\">".$tutorial_upcoming[$i][6]."</a></li>\n";
          if (!empty($tutorial_upcoming[$i][7])) {
            echo "\t\t\t<li>Slides:<ul>\n";
            if (!($tutorial_upcoming[$i][7][0]=="") or !($tutorial_upcoming[$i][7][1]=="")) {
              echo "\t\t\t<li>Day 1: ";
                if (!($tutorial_upcoming[$i][7][0]=="")) {
                  echo "<a href=\"".$tutorial_upcoming[$i][7][0]."\">PDF</a>";
                }
                if (!($tutorial_upcoming[$i][7][1]=="")) {
                  echo "\t\t\t <a href=\"".$tutorial_upcoming[$i][7][1]."\">PowerPoint</a>\n";
                }
                echo "\t\t\t</li>\n";
            }
            if (!($tutorial_upcoming[$i][7][2]=="") or !($tutorial_upcoming[$i][7][3]=="")) {
              echo "\t\t\t<li>Day 2: ";
              if (!($tutorial_upcoming[$i][7][2]=="")) {
                echo "<a href=\"".$tutorial_upcoming[$i][7][2]."\">PDF</a>\n";
              }
              if (!($tutorial_upcoming[$i][7][3]=="")) {
                echo "\t\t\t <a href=\"".$tutorial_upcoming[$i][7][3]."\">PowerPoint</a>\n";
              }
              echo "\t\t\t</li>\n";
            }
            echo "\t\t\t</ul></li>\n";
          }
          
					echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
				$upevents++;
      }

			# Upcoming: Camps
      if (!empty($camp_upcoming)) {
 				echo "<h2>Camps</h2>\n\t<ul>\n";
        $max = sizeof($camp_upcoming);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$camp_upcoming[$i][6]."\">".$camp_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$camp_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$camp_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$camp_upcoming[$i][4]."</li>\n";
          if (!($camp_upcoming[$i][5])=="") {
              echo "\t\t\t<li>Host: ".$camp_upcoming[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$camp_upcoming[$i][6]."\">".$camp_upcoming[$i][6]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
				$upevents++;
      }

			# Upcoming: Dev
			if (!empty($dev_upcoming)) {
				echo "<h2>Developer's Workshops</h2>\n\t<ul>\n";
        $max = sizeof($dev_upcoming);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$dev_upcoming[$i][6]."\">".$dev_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$dev_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$dev_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$dev_upcoming[$i][4]."</li>\n";
          if (!($dev_upcoming[$i][5])=="") {
              echo "\t\t\t<li>Host: ".$dev_upcoming[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$dev_upcoming[$i][6]."\">".$dev_upcoming[$i][6]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
				$upevents++;
      }

			# Upcoming: Contests
			if (!empty($contests_upcoming)) {
				echo "<h2>Contest(s)</h2>\n\t<ul>\n";
        $max = sizeof($contest_upcoming);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$contest_upcoming[$i][4]."\">".$contest_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Start: ".$contest_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>End: ".$contest_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Details and Rules: <a href=\"".$contest_upcoming[$i][4]."\">".$contest_upcoming[$i][4]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
				$upevents++;
      }
	
			if($upevents == 0) {
				echo "<ul><li>More events being planned, please check back later.</li></ul>\n";
 			}
		
			echo "<div class=\"hr\" style=\"padding-top: 14px; margin-bottom: 14px;\"></div>";

			# Tutorials
			echo "<h1 style=\"display:inline; padding-left: 10px; padding-right: 10px;\"><a name=\"Tutorials\"></a>Tutorials</h1> <a href=\"\">Top</a>\n";
			if (!empty($tutorial_upcoming)) {
			  echo "<h2>Upcoming</h2>\n\t<ul>\n";
			  $max = sizeof($tutorial_upcoming);
			  for ($i=0; $i<$max; $i++) {
				
			    echo "\t<li>\n\t<a href=\"".$tutorial_upcoming[$i][6]."\">".$tutorial_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
			    echo "\t\t\t<li>Date: ".$tutorial_upcoming[$i][2]."</li>\n";
			    echo "\t\t\t<li>Location: ".$tutorial_upcoming[$i][3]."</li>\n";
			    echo "\t\t\t<li>Goal: ".$tutorial_upcoming[$i][4]."</li>\n";
			    if (!($tutorial_upcoming[$i][5])=="") {
  			      echo "\t\t\t<li>Host: ".$tutorial_upcoming[$i][5]."</li>\n";
			    }
			    echo "\t\t\t<li>Website: <a href=\"".$tutorial_upcoming[$i][6]."\">".$tutorial_upcoming[$i][6]."</a></li>\n";
					if (!empty($tutorial_upcoming[$i][7])) {
            echo "\t\t\t<li>Slides:<ul>\n";
            if (!($tutorial_upcoming[$i][7][0]=="") or !($tutorial_upcoming[$i][7][1]=="")) {  
              echo "\t\t\t<li>Day 1: ";
                if (!($tutorial_upcoming[$i][7][0]=="")) {
                  echo "<a href=\"".$tutorial_upcoming[$i][7][0]."\">PDF</a>";
                }
                if (!($tutorial_upcoming[$i][7][1]=="")) {
                  echo "\t\t\t <a href=\"".$tutorial_upcoming[$i][7][1]."\">PowerPoint</a>\n";
                }
                echo "\t\t\t</li>\n";
            }
            if (!($tutorial_upcoming[$i][7][2]=="") or !($tutorial_upcoming[$i][7][3]=="")) {
              echo "\t\t\t<li>Day 2: ";
              if (!($tutorial_upcoming[$i][7][2]=="")) {
                echo "<a href=\"".$tutorial_upcoming[$i][7][2]."\">PDF</a>\n";
              }
              if (!($tutorial_upcoming[$i][7][3]=="")) {
                echo "\t\t\t <a href=\"".$tutorial_upcoming[$i][7][3]."\">PowerPoint</a>\n";
              }
              echo "\t\t\t</li>\n";
            }
            echo "\t\t\t</ul></li>\n";
          }
			    echo "\t\t</ul>\n";
			    echo "\t</li>\n";
			  }
			  echo "</ul>\n";
			} 
 			if (!empty($tutorial_past)) {
			  echo "<h2>Past</h2>\n\t<ul>\n";
			  $max = sizeof($tutorial_past);
			  for ($i=0; $i<$max; $i++) {
				
			    echo "\t<li>\n\t<a href=\"".$tutorial_past[$i][6]."\">".$tutorial_past[$i][0]."</a>\n\t\t<ul>"; #Title
			    echo "\t\t\t<li>Date: ".$tutorial_past[$i][2]."</li>\n";
			    echo "\t\t\t<li>Location: ".$tutorial_past[$i][3]."</li>\n";
			    echo "\t\t\t<li>Goal: ".$tutorial_past[$i][4]."</li>\n";
			    if (!($tutorial_past[$i][5]=="")) {
  			      echo "\t\t\t<li>Host: ".$tutorial_past[$i][5]."</li>\n";
			    }
			    echo "\t\t\t<li>Website: <a href=\"".$tutorial_past[$i][6]."\">".$tutorial_past[$i][6]."</a></li>\n";
			    if (!empty($tutorial_past[$i][7])) {
						echo "\t\t\t<li>Slides:<ul>\n";
						if (!($tutorial_past[$i][7][0]=="") or !($tutorial_past[$i][7][1]=="")) { 
							echo "\t\t\t<li>Day 1: ";
								if (!($tutorial_past[$i][7][0]=="")) { 
									echo "<a href=\"".$tutorial_past[$i][7][0]."\">PDF</a>";
								}
								if (!($tutorial_past[$i][7][1]=="")) { 
									echo "\t\t\t <a href=\"".$tutorial_past[$i][7][1]."\">PowerPoint</a>\n";
								}
								echo "\t\t\t</li>\n";
						}
						if (!($tutorial_past[$i][7][2]=="") or !($tutorial_past[$i][7][3]=="")) {
              echo "\t\t\t<li>Day 2: ";
							if (!($tutorial_past[$i][7][2]=="")) { 
								echo "<a href=\"".$tutorial_past[$i][7][2]."\">PDF</a>\n";
							}
							if (!($tutorial_past[$i][7][3]=="")) { 
								echo "\t\t\t <a href=\"".$tutorial_past[$i][7][3]."\">PowerPoint</a>\n";
							}
							echo "\t\t\t</li>\n";
						}
					  echo "\t\t\t</ul></li>\n";
					}
			    echo "\t\t</ul>\n";
			    echo "\t</li>\n";
			  }
			  echo "</ul>\n";
			} 

      echo "<div class=\"hr\" style=\"padding-top: 14px; margin-bottom: 14px;\"></div>";

      # Camps
      echo "<h1 style=\"display:inline; padding-left: 10px; padding-right: 10px;\"><a name=\"Camps\"></a>Camps</h1> <a href=\"\">Top</a>\n";
       if (!empty($camp_upcoming)) {
        echo "<h2>Upcoming</h2>\n\t<ul>\n";
        $max = sizeof($camp_upcoming);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$camp_upcoming[$i][6]."\">".$camp_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$camp_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$camp_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$camp_upcoming[$i][4]."</li>\n";
          if (!($camp_upcoming[$i][5])=="") {
              echo "\t\t\t<li>Host: ".$camp_upcoming[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$camp_upcoming[$i][6]."\">".$camp_upcoming[$i][6]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n"; 
      }
      if (!empty($camp_past)) {
        echo "<h2>Past</h2>\n\t<ul>\n";
        $max = sizeof($camp_past);
        for ($i=0; $i<$max; $i++) {
    
          echo "\t<li>\n\t<a href=\"".$camp_past[$i][6]."\">".$camp_past[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$camp_past[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$camp_past[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$camp_past[$i][4]."</li>\n";
          if (!($camp_past[$i][5]=="")) {
              echo "\t\t\t<li>Host: ".$camp_past[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$camp_past[$i][6]."\">".$camp_past[$i][6]."</a></li>\n";
					if (!empty($camp_past[$i][7])) {
            echo "\t\t\t<li>Slides:<ul>\n";
            if (!($camp_past[$i][7][0]=="") or !($camp_past[$i][7][1]=="")) {  
              echo "\t\t\t<li>Day 1: ";
                if (!($camp_past[$i][7][0]=="")) {
                  echo "<a href=\"".$camp_past[$i][7][0]."\">PDF</a>";
                }
                if (!($camp_past[$i][7][1]=="")) {
                  echo "\t\t\t <a href=\"".$camp_past[$i][7][1]."\">PowerPoint</a>\n";
                }
                echo "\t\t\t</li>\n";
            }
            if (!($camp_past[$i][7][2]=="") or !($camp_past[$i][7][3]=="")) {
              echo "\t\t\t<li>Day 2: ";
              if (!($camp_past[$i][7][2]=="")) {
                echo "<a href=\"".$camp_past[$i][7][2]."\">PDF</a>\n";
              }
              if (!($camp_past[$i][7][3]=="")) {
                echo "\t\t\t <a href=\"".$camp_past[$i][7][3]."\">PowerPoint</a>\n";
              }
              echo "\t\t\t</li>\n";
            }
            echo "\t\t\t</ul></li>\n";
          }
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
      }

      echo "<div class=\"hr\" style=\"padding-top: 14px; margin-bottom: 14px;\"></div>";

			# Dev 
      echo "<h1 style=\"display:inline; padding-left: 10px; padding-right: 10px;\"><a name=\"Dev\"></a>Developer's Workshops</h1> <a href=\"\">Top</a>\n";
       if (!empty($dev_upcoming)) {
        echo "<h2>Upcoming</h2>\n\t<ul>\n";
        $max = sizeof($dev_upcoming);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$dev_upcoming[$i][6]."\">".$dev_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$dev_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$dev_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$dev_upcoming[$i][4]."</li>\n";
          if (!($dev_upcoming[$i][5])=="") {
              echo "\t\t\t<li>Host: ".$dev_upcoming[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$dev_upcoming[$i][6]."\">".$dev_upcoming[$i][6]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
      }
      if (!empty($dev_past)) {
        echo "<h2>Past</h2>\n\t<ul>\n";
        $max = sizeof($dev_past);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$dev_past[$i][6]."\">".$dev_past[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Date: ".$dev_past[$i][2]."</li>\n";
          echo "\t\t\t<li>Location: ".$dev_past[$i][3]."</li>\n";
          echo "\t\t\t<li>Goal: ".$dev_past[$i][4]."</li>\n";
          if (!($dev_past[$i][5]=="")) {
              echo "\t\t\t<li>Host: ".$dev_past[$i][5]."</li>\n";
          }
          echo "\t\t\t<li>Website: <a href=\"".$dev_past[$i][6]."\">".$dev_past[$i][6]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
      }

      echo "<div class=\"hr\" style=\"padding-top: 14px; margin-bottom: 14px;\"></div>";

      # Contests
      echo "<h1 style=\"display:inline; padding-left: 10px; padding-right: 10px;\"><a name=\"Contests\"></a>Contest(s)</h1> <a href=\"\">Top</a>\n";
       if (!empty($contest_upcoming)) {
        echo "<h2>Upcoming</h2>\n\t<ul>\n";
        $max = sizeof($contest_upcoming);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$contest_upcoming[$i][4]."\">".$contest_upcoming[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Start: ".$contest_upcoming[$i][2]."</li>\n";
          echo "\t\t\t<li>End: ".$contest_upcoming[$i][3]."</li>\n";
          echo "\t\t\t<li>Details and Rules: <a href=\"".$contest_upcoming[$i][4]."\">".$contest_upcoming[$i][4]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
      }
      if (!empty($contest_past)) {
        echo "<h2>Past</h2>\n\t<ul>\n";
        $max = sizeof($contest_past);
        for ($i=0; $i<$max; $i++) {

          echo "\t<li>\n\t<a href=\"".$contest_past[$i][4]."\">".$contest_past[$i][0]."</a>\n\t\t<ul>"; #Title
          echo "\t\t\t<li>Start: ".$contest_past[$i][2]."</li>\n";
          echo "\t\t\t<li>End: ".$contest_past[$i][3]."</li>\n";
          echo "\t\t\t<li>Details and Rules: <a href=\"".$contest_past[$i][4]."\">".$contest_past[$i][4]."</a></li>\n";
          echo "\t\t</ul>\n";
          echo "\t</li>\n";
        }
        echo "</ul>\n";
      }


		?>
		</div>
	</div>
   </div>
</div>

<?php 
	require_once('footer.php');
?>

<!--
	require_once('includes/google_analytics.php');
-->

</body>
</html>
