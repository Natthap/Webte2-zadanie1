<?php
$dataArr = array('A'=>10, 'B'=>33, 'C'=>35, 'D'=>20, 'E'=>14, 'FX'=>1, 'FN'=>1);
$width=500;
$height=400;
$font = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';
$image = imagecreate($width,$height);
$piewidth = ($width * 0.70) - 25;
$x = round($piewidth/2) + 30;
$y = round($height/2) + 10;
$total = array_sum($dataArr);
$angle_start = 0;
$ylegend = 2;

$colorA = imagecolorallocate($image, 0, 128, 255);
$colorB = imagecolorallocate($image, 0, 255, 128);
$colorC = imagecolorallocate($image, 0, 255, 0);
$colorD = imagecolorallocate($image, 0, 128, 128);
$colorE = imagecolorallocate($image, 0, 0, 255);
$colorFX = imagecolorallocate($image,255, 0, 0);
$black = imagecolorallocate($image, 0,0,0);
$colors = array('A'=>$colorA, 'B'=>$colorB, 'C'=>$colorC, 'D'=>$colorD, 'E'=>$colorE, 'FX'=>$colorFX, 'FN'=>$black);

imagefilledrectangle($image, 0, 0, $width, $height, imagecolorallocate($image, 255, 255, 255));
imagestring($image, 12, 80, 0, "2015/2016 - 112 studentov", $black);

foreach($dataArr as $label=>$value) {
    $angle_done = ($value/$total) * 360;
    $perc = round(($value/$total) * 100, 1);
    imagefilledarc($image, $x, $y, $piewidth, ($height - 30), $angle_start, $angle_done+= $angle_start, $colors[$label], IMG_ARC_PIE);
    $xtext = $x + (cos(deg2rad(($angle_start+$angle_done)/2))*($piewidth/4));
    $ytext = $y + (sin(deg2rad(($angle_start+$angle_done)/2))*($height/4));
    imagettftext($image, 12, 0, $xtext-5, $ytext, imagecolorallocate($image, 0, 0, 0), $font, "$perc %");
    imagefilledrectangle($image, $piewidth+40, $ylegend, $piewidth+60, $ylegend+=20, $colors[$label]);
    imagettftext($image, 12, 0, $piewidth+65, $ylegend-3, imagecolorallocate($image, 0, 0, 0), $font, $label);
    $ylegend += 4;
    $angle_start = $angle_done;
}

header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>