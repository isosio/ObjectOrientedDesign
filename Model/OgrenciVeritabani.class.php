<?php
/**
 * Created by PhpStorm.
 * User: wsan
 * Date: 27.03.2016
 * Time: 01:32
 */

namespace cc;


class OgrenciVeritabani //implements KisiVeritabani
{
   /* public function insert($ogrenci)
    {

    }*/

    public static function insert($table, $entities)
    {
       // $degerler = array("ogrenciNo" => "'000017'", "adi" => "'xy'", "soyadi" => "'xy'");

        $columns = "";
        $values = "";
        //print_r($degerler);
        foreach ($entities as $column => $value)
        {
            $columns .= ($columns == "") ? "" : ", ";
            $columns .="\"".$column."\"";
            $values .= ($values == "") ? "" : ", ";
            $values .= $value;
        }
        //print_r($columns);print_r($values);
        $arr=explode(",",$values);
       // echo "---". $arr[0];

        //$sql = "insert into $tabloAdi ($columns) values ($values)";

        try
        {   include(__DIR__.'/../Include/DatabaseConnection.php');
            $sql="INSERT INTO ($columns) VALUES($values)";
           // echo $sql;

            $stmt = $veritabaniBaglantisi->prepare("INSERT INTO \"$table\" ($columns) VALUES($values)");

            return ($stmt->execute());
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }

    }

}