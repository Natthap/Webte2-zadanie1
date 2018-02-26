<?php
$data = array(20,11,13,7,5,1,1); //fill this array with your data
$total = array_sum($data);
for($i = 0; $i < count($data); $i++) {
    $arc[$i] = $data[$i]*360/$total;
}

// create image
$image = imagecreate(300,300);
$style = IMG_ARC_PIE;

// allocate some colors
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 200, 0, 0);
$yellow = imagecolorallocate($image, 255, 255, 0);
$blue = imagecolorallocate($image, 0, 102, 255);
$green = imagecolorallocate($image, 51, 204, 51);
$pink = imagecolorallocate($image, 255, 153, 204);
$purple  = imagecolorallocate($image, 204, 0, 255);
$azure = imagecolorallocate($image, 0, 255, 255);
$colors = array($red,$yellow,$blue,$green,$pink,$purple,$azure);
$start=0;

for($j = 0; $j < count($data); $j++) {
    imagefilledarc($image, 150, 150, 300, 300, $start, $start+$arc[$j], $colors[$j], $style);
    $start=$start+$arc[$j];
}

// flush image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);