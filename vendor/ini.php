<?php
/**
 * Created by PhpStorm.
 * User: salvador
 * Date: 6/6/14
 * Time: 4:04 PM
 */
require_once 'vendor/autoload.php';

$m = new PHPMailer;

$m->isSMTP();
$m->STMPAuth = true;
$m->SMTPDebug = 2;

$m->Host = 'smtp.gmail.com';
$m->Username = 'ola@ola.com';
$m->Password = 'hola';
$m->SMTPSecure = 'ssl';
$m->Port = 465;