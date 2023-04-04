<?php
class balok
{
    public $panjang;
    public $lebar;
    public $tinggi;


    function __construct($p,$l,$t)
    {
        $this->panjang=$p;
        $this->lebar=$l;
        $this->tinggi=$t;
    }

    function volume()
        {
            $hasil = $this->panjang * $this->lebar * $this->tinggi;
            return $hasil;
        }
    
    function luas()
        {
            $hasil = 2 * ($this->panjang + $this->lebar + $this->tinggi);
            return $hasil;
        }

}

$objek = new balok(9,7,6);
echo $objek->volume();
echo "<br/>";
echo $objek->luas();