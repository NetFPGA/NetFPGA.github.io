<?php

$filename = "../boards_sold_10G.txt";
$base_url = '';
$style_dir  = 'images/counter/';

$fd = fopen ($filename , "r") or die ("Can't open $filename") ;
$count = fread ($fd , filesize ($filename)) ;
fclose($fd) ;

$len = strlen($count);

  for ($i=0;$i<$len-1;$i++)
    {
      echo '<img src="'.$base_url . $style_dir . substr($count,$i,1) . '.gif' . '" border="0">';
    }
  return;

?>
