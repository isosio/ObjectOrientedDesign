<?php
/**
 * Created by PhpStorm.
 * User: wsan
 * Date: 10.03.2016
 * Time: 17:02
 */

namespace cc;

require_once 'Kisi.class.php';

class Ogrenci extends \cc\Kisi
{
    private $ogrenciNo;

/*
    function __construct($ogrenciNo, $adi, $soyadi)
    {
        parent::__construct($adi,$soyadi);
        $this->setOgrenciNo($ogrenciNo);

    }*/

    /**
     * @return mixed
     */
    public function getOgrenciNo()
    {
        return $this->ogrenciNo;
    }

    /**
     * @param mixed $ogrenciNo
     */
    public function setOgrenciNo($ogrenciNo)
    {
        $this->ogrenciNo = $ogrenciNo;
    }

    public function __set($prop, $val) {
        $this->$prop = $val;
    }
    public function __get($prop) {
        return $this->$prop;
    }


}