<?php
/**
 * Created by PhpStorm.
 * User: Meckey_Shu
 * Date: 2018/7/11
 * Time: 17:02
 * PHP 制作二维码
 * 要求：
 * 开启GD库
 */
include "phpqrcode/qrlib.php";

// 显示一个文本二维码 可以在<img>标签中直接调用
QRcode::png('abc');

// 保存二维码
//QRcode::png('http://www.meckey.com', 'qr_code.png', QR_ECLEVEL_L, 10, 1,true);

