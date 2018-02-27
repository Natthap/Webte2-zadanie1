<?php
$image = imagecreatetruecolor(2000, 400);

$colorA = imagecolorallocate($image, 0, 128, 255);
$colorB = imagecolorallocate($image, 0, 255, 128);
$colorC = imagecolorallocate($image, 0, 255, 0);
$colorD = imagecolorallocate($image, 0, 128, 128);
$colorE = imagecolorallocate($image, 0, 0, 255);
$colorFX = imagecolorallocate($image,255, 0, 0);
$white = imagecolorallocate($image, 255,255,255);
$black = imagecolorallocate($image, 0,0,0);

imagefilledrectangle($image,0,0,2000,400, $white);

//2012/2013
imagestring($image, 12, 126, 355, "2012/2013 - 62 studentov", $black);

imagefilledrectangle($image, 5+20, 350, 55+20, 296.1, $colorA);
imagestring($image, 12, 25+5, 280, "A(20)", $black);

imagefilledrectangle($image, 60+20, 350, 110+20, 320.4, $colorB);
imagestring($image, 12, 80+5, 304, "B(11)", $black);

imagefilledrectangle($image, 115+20, 350, 165+20, 315, $colorC);
imagestring($image, 12, 135+5, 298, "C(13)", $black);

imagefilledrectangle($image, 170+20, 350, 220+20, 331.1, $colorD);
imagestring($image, 12, 192+5, 315, "D(7)", $black);

imagefilledrectangle($image, 225+20, 350, 275+20, 336.5, $colorE);
imagestring($image, 12, 248+5, 319, "E(5)", $black);

imagefilledrectangle($image, 280+20, 350, 330+20, 350, $colorFX);
imagestring($image, 12, 300+5, 332, "FX(0)", $black);

imagefilledrectangle($image, 335+20, 350, 385+20, 347.3, $colorFX);
imagestring($image, 12, 356+5, 330, "FN(1)", $black);

imageline($image, 410, 325, 410, 375, $black);


//2013/2014
imagestring($image, 12, 520, 355, "2013/2014 - 53 studentov", $black);

imagefilledrectangle($image, 415, 350, 415+50, 296.1, $colorA);
imagestring($image, 12, 420, 280, "A(20)", $black);

imagefilledrectangle($image, 470, 350, 470+50, 298.8, $colorB);
imagestring($image, 12, 475, 282, "B(19)", $black);

imagefilledrectangle($image, 525, 350, 525+50, 333.8, $colorC);
imagestring($image, 12, 533, 317, "C(6)", $black);

imagefilledrectangle($image, 580, 350, 580+50, 341.9, $colorD);
imagestring($image, 12, 588, 325, "D(3)", $black);

imagefilledrectangle($image, 635, 350, 635+50, 347.3, $colorE);
imagestring($image, 12, 644, 330, "E(1)", $black);

imagefilledrectangle($image, 690, 350, 690+50, 350, $colorFX);
imagestring($image, 12, 695, 332, "FX(0)", $black);

imagefilledrectangle($image, 745, 350, 745+50, 350, $colorFX);
imagestring($image, 12, 750, 332, "FN(0)", $black);

imageline($image, 745+55, 325, 745+55, 375, $black);


//2014/2015
imagestring($image, 12, 910, 355, "2014/2015 - 53 studentov", $black);

imagefilledrectangle($image, 805, 350, 805+50, 325.7, $colorA);
imagestring($image, 12, 814, 310, "A(9)", $black);

imagefilledrectangle($image, 860, 350, 860+50, 298.8, $colorB);
imagestring($image, 12, 865, 282, "B(19)", $black);

imagefilledrectangle($image, 915, 350, 965, 290.7, $colorC);
imagestring($image, 12, 920, 274, "C(22)", $black);

imagefilledrectangle($image, 970, 350, 1020, 350, $colorD);
imagestring($image, 12, 975, 332, "D(0)", $black);

imagefilledrectangle($image, 1025, 350, 1075, 350, $colorE);
imagestring($image, 12, 1030, 332, "E(0)", $black);

imagefilledrectangle($image, 1080, 350, 1130, 350, $colorFX);
imagestring($image, 12, 1085, 332, "FX(0)", $black);

imagefilledrectangle($image, 1135, 350, 1135+50, 341.9, $colorFX);
imagestring($image, 12, 1140, 325, "FN(3)", $black);

imageline($image, 1190, 325, 1190, 375, $black);

//2015/2016
imagestring($image, 12, 1285, 355, "2015/2016 - 112 studentov", $black);

imagefilledrectangle($image, 1195, 350, 1245, 323.0, $colorA);
imagestring($image, 12, 1200, 308, "A(10)", $black);

imagefilledrectangle($image, 1250, 350, 1300, 261.1, $colorB);
imagestring($image, 12, 1255, 246, "B(33)", $black);

imagefilledrectangle($image, 1305, 350, 1355, 255.7, $colorC);
imagestring($image, 12, 1310, 239, "C(35)", $black);

imagefilledrectangle($image,1360 , 350, 1410, 296.1, $colorD);
imagestring($image, 12, 1365, 280, "D(20)", $black);

imagefilledrectangle($image,1415 , 350, 1465, 312.3, $colorE);
imagestring($image, 12, 1420, 295, "E(14)", $black);

imagefilledrectangle($image, 1470, 350, 1520,350 , $colorFX);
imagestring($image, 12, 1475, 332, "FX(0)", $black);

imagefilledrectangle($image,1525 , 350, 1575, 350, $colorFX);
imagestring($image, 12, 1530, 332, "FN(0)", $black);

imageline($image, 1580, 325, 1580, 375, $black);

//2016/2017
imagestring($image, 12, 1675, 355, "2016/2017 - 128 studentov", $black);

imagefilledrectangle($image, 1585, 350, 1635, 336.5, $colorA);
imagestring($image, 12, 1593, 319, "A(5)", $black);

imagefilledrectangle($image, 1640, 350, 1690, 301.5, $colorB);
imagestring($image, 12, 1645, 285, "B(18)", $black);

imagefilledrectangle($image, 1695, 350, 1745, 266.5, $colorC);
imagestring($image, 12, 1700, 250, "C(31)", $black);

imagefilledrectangle($image, 1750, 350, 1800, 280, $colorD);
imagestring($image, 12, 1755, 263, "D(26)", $black);

imagefilledrectangle($image, 1805, 350, 1855, 277.2, $colorE);
imagestring($image, 12, 1810, 260, "E(27)", $black);

imagefilledrectangle($image, 1860, 350, 1910, 301.5, $colorFX);
imagestring($image, 12, 1860, 285, "FX(18)", $black);

imagefilledrectangle($image, 1915, 350, 1970, 342, $colorFX);
imagestring($image, 12, 1920, 325, "FN(3)", $black);

imageline($image, 1975, 325, 1975, 375, $black);

//oznacenia osi
imagestring($image, 12, 5, 352, "0", $black);
imagestring($image, 12, 23, 5, "128", $black);
//x os
imageline($image, 10, 350, 1990, 350, $black);
//y os
imageline($image, 20, 5, 20, 375, $black);
header('Content-Type: image/png');

imagepng($image);
imagedestroy($image);
?>