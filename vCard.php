<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/8
 * Time: 12:05
 */

include "./phpqrcode/qrlib.php";


/*test1*/

//$content = 'BEGIN:VCARD'."\n";
//$content .= 'VERSION:2.1'."\n";
//$content .= 'N:张'."\n";
//$content .= 'FN:三'."\n";
//$content .= 'TEL;TYPE=cell:1376516****'."\n";
//$content .= 'END:VCARD'."\n";

/*
N //姓
FN //名
ORG //公司地址
TEL;WORK;VOICE //工作单位电话
TEL;HOME;VOICE //家里电话
TEL;TYPE=cell //移动电话
ADR;HOME //家庭住址
EMAIL //邮箱
URL //网址
*/






/*test2*/

$content = 'BEGIN:VCARD'."\n";
$content .= 'VERSION:2.1'."\n";
$content .= 'N:朱'."\n";
$content .= 'FN:磊'."\n";
$content .= 'ORG:新月亮网络科技公司'."\n";
$content .= 'TEL;WORK;VOICE:+86 110'."\n";
$content .= 'TEL;HOME;VOICE:+86 119'."\n";
$content .= 'TEL;TYPE=cell:+86 120'."\n";
$content .= 'ADR;HOME:;;海淀区四季青桥110号1单元119号'."\n";

$content .= 'EMAIL:111222333@qq.com'."\n";
$content .= 'URL:http://www.dealmoon.com'."\n";

$content .= 'END:VCARD'."\n";


QRcode::png($content);