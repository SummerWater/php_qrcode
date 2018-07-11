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

QRcode::png('abc');
