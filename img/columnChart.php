<?php
$image = imagecreatetruecolor(2200, 400);

$colorA = imagecolorallocate($image, 128, 255, 128);
$colorB = imagecolorallocate($image, 159, 255, 128);
$colorC = imagecolorallocate($image, 223, 255, 128);
$colorD = imagecolorallocate($image, 255, 255, 128);
$colorE = imagecolorallocate($image, 255, 191, 128);
$colorFX = imagecolorallocate($image,255, 128, 128);
$white = imagecolorallocate($image, 255,255,255);



//2012/2013
imagestring($image, 12, 165, 380, "2012/2013", $white);

imagefilledrectangle($image, 5+20, 350, 55+20, 296.1, $colorA);
imagestring($image, 12, 25+5, 352, "A(20)", $white);

imagefilledrectangle($image, 60+20, 350, 110+20, 320.4, $colorB);
imagestring($image, 12, 80+5, 352, "B(11)", $white);

imagefilledrectangle($image, 115+20, 350, 165+20, 315, $colorC);
imagestring($image, 12, 135+5, 352, "C(13)", $white);

imagefilledrectangle($image, 170+20, 350, 220+20, 331.1, $colorD);
imagestring($image, 12, 190+5, 352, "D(7)", $white);

imagefilledrectangle($image, 225+20, 350, 275+20, 342.6, $colorE);
imagestring($image, 12, 245+5, 352, "E(5)", $white);

imagefilledrectangle($image, 280+20, 350, 330+20, 350, $colorFX);
imagestring($image, 12, 300+5, 352, "FX(0)", $white);

imagefilledrectangle($image, 335+20, 350, 385+20, 347.3, $colorFX);
imagestring($image, 12, 355+5, 352, "FN(1)", $white);

imageline($image, 410, 325, 410, 375, $white);


//2013/2014
imagestring($image, 12, 555, 380, "2013/2014", $white);

imagefilledrectangle($image, 415, 350, 415+50, 296.1, $colorA);
imagestring($image, 12, 420, 352, "A(20)", $white);

imagefilledrectangle($image, 470, 350, 470+50, 298.8, $colorB);
imagestring($image, 12, 475, 352, "B(19)", $white);

imagefilledrectangle($image, 525, 350, 525+50, 333.8, $colorC);
imagestring($image, 12, 530, 352, "C(6)", $white);

imagefilledrectangle($image, 580, 350, 580+50, 341.9, $colorD);
imagestring($image, 12, 585, 352, "D(3)", $white);

imagefilledrectangle($image, 635, 350, 635+50, 347.3, $colorE);
imagestring($image, 12, 640, 352, "E(1)", $white);

imagefilledrectangle($image, 690, 350, 690+50, 350, $colorFX);
imagestring($image, 12, 695, 352, "FX(0)", $white);

imagefilledrectangle($image, 745, 350, 745+50, 350, $colorFX);
imagestring($image, 12, 750, 352, "FN(0)", $white);

imageline($image, 745+55, 325, 745+55, 375, $white);


//2014/2015
imagestring($image, 12, 945, 380, "2014/2015", $white);

imagefilledrectangle($image, 805, 350, 805+50, 325.7, $colorA);
imagestring($image, 12, 810, 352, "A(9)", $white);

imagefilledrectangle($image, 860, 350, 860+50, 298.8, $colorB);
imagestring($image, 12, 865, 352, "B(19)", $white);

imagefilledrectangle($image, 915, 350, 965, 290.7, $colorC);
imagestring($image, 12, 920, 352, "C(22)", $white);

imagefilledrectangle($image, 970, 350, 1020, 350, $colorD);
imagestring($image, 12, 975, 352, "D(0)", $white);

imagefilledrectangle($image, 1025, 350, 1075, 350, $colorE);
imagestring($image, 12, 1030, 352, "E(0)", $white);

imagefilledrectangle($image, 1080, 350, 1130, 350, $colorFX);
imagestring($image, 12, 1085, 352, "FX(0)", $white);

imagefilledrectangle($image, 1135, 350, 1135+50, 341.9, $colorFX);
imagestring($image, 12, 1140, 352, "FN(3)", $white);

imageline($image, 1190, 325, 1190, 375, $white);

//2015/2016
imagestring($image, 12, 1335, 380, "2015/2016", $white);

imagefilledrectangle($image, 1195, 350, 1245, 323.0, $colorA);
imagestring($image, 12, 1200, 352, "A(10)", $white);

imagefilledrectangle($image, 1250, 350, 1300, 261.1, $colorB);
imagestring($image, 12, 1255, 352, "B(33)", $white);

imagefilledrectangle($image, 1305, 350, 1355, 255.7, $colorC);
imagestring($image, 12, 1310, 352, "C(35)", $white);

imagefilledrectangle($image,1360 , 350, 1410, 296.1, $colorD);
imagestring($image, 12, 1365, 352, "D(20)", $white);

imagefilledrectangle($image,1415 , 350, 1465, 312.3, $colorE);
imagestring($image, 12, 1420, 352, "E(14)", $white);

imagefilledrectangle($image, 1470, 350, 1520,350 , $colorFX);
imagestring($image, 12, 1475, 352, "FX(0)", $white);

imagefilledrectangle($image,1525 , 350, 1575, 350, $colorFX);
imagestring($image, 12, 1530, 352, "FN(0)", $white);

imageline($image, 1580, 325, 1580, 375, $white);

//2016/2017
imagestring($image, 12, 1725, 380, "2016/2017", $white);

imagefilledrectangle($image, 1585, 350, 1635, 336.5, $colorA);
imagestring($image, 12, 1590, 352, "A(5)", $white);

imagefilledrectangle($image, 1640, 350, 1690, 301.5, $colorB);
imagestring($image, 12, 1645, 352, "B(18)", $white);

imagefilledrectangle($image, 1695, 350, 1745, 266.5, $colorC);
imagestring($image, 12, 1700, 352, "C(31)", $white);

imagefilledrectangle($image, 1750, 350, 1800, 280, $colorD);
imagestring($image, 12, 1755, 352, "D(26)", $white);

imagefilledrectangle($image, 1805, 350, 1855, 277.2, $colorE);
imagestring($image, 12, 1810, 352, "E(27)", $white);

imagefilledrectangle($image, 1860, 350, 1910, 301.5, $colorFX);
imagestring($image, 12, 1865, 352, "FX(18)", $white);

imagefilledrectangle($image, 1915, 350, 1970, 342, $colorFX);
imagestring($image, 12, 1920, 352, "FN(3)", $white);

imageline($image, 1975, 325, 1975, 375, $white);


//legenda
imageline($image, 0, 350, 2095, 350, $white);
imagestring($image, 12, 1930, 10, "Legenda: ", $white);
imagestring($image, 12, 1930, 30, "Pod stlpcom:  ", $white);
imagestring($image, 12, 1930, 50, "Znamka( Pocet ludi, ktori ", $white);
imagestring($image, 12, 1945, 70, "ziskali z predmetu tuto ", $white);
imagestring($image, 12, 1945, 90, "znamku )", $white);


//oznacenia osi
imagestring($image, 12, 5, 352, "0", $white);
imagestring($image, 12, 23, 5, "pocet studentov(max 128)", $white);
imagestring($image, 12, 1995, 360, "akademicky rok", $white);
//x os
imageline($image, 0, 350, 2095, 350, $white);
//y os
imageline($image, 20, 5, 20, 375, $white);
header('Content-Type: image/png');

imagepng($image);
imagedestroy($image);
?>