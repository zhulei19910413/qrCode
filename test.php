<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8
 * Time: 12:05
 */


include "phpqrcode/qrlib.php";



$tese = "332134324543646343321343332113434634332134333211343463433213433321134346343321343332113432454364634332134322";

//QRcode::png($tese);



/*
public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false)
{
    $enc = QRencode::factory($level, $size, $margin);
    return $enc->encodePNG($text, $outfile, $saveandprint=false);
}

1.$test         生成的图片；
2.$outfile      是否保存图片（保存图片的名称）；
3.$level        容错级别（直接看看不出来区别）；
4.$size         尺寸
5.$margin       边距
6.$saveandprint 保存并打印（同时进行）；


*/

//QRcode::png($tese,'abc.jpg');


//QRcode::png($tese,false,QR_ECLEVEL_L);


//QRcode::png($tese,false,QR_ECLEVEL_L,20);


//QRcode::png($tese,false,QR_ECLEVEL_L,10,0);


QRcode::png($tese,'111.jpg',QR_ECLEVEL_L,10,0,true);



die;