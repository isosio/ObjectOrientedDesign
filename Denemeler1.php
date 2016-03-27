<?php
/**
 * Created by PhpStorm.
 * User: wsan
 * Date: 22.03.2016
 * Time: 23:25
 */
require_once (__DIR__.'/Model/OgrenciVeritabani.class.php');


ini_set('session.save_handler', 'redis');
ini_set('session.save_path',    'tcp://127.0.0.1:6379');
session_start();
$_SESSION['baglandi'] =TRUE;

$_SESSION['baslangicZamani']=time();



$degerler = array("ogrenciNo" => "$_POST['ogrenciNo']", "adi" => "'zz'", "soyadi" => "'zz'");
\cc\OgrenciVeritabani::create($degerler);