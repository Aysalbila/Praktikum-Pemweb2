<?php
class buah
{
    public $namabuah;
    public $warnaKulit;
    public $rasa;
    public $aroma;

    function __construct($nama, $warna, $taste, $bau)
    {
        $this->namabuah = $nama;
        $this->warnaKulit = $warna;
        $this->rasa = $taste;
        $this->aroma = $bau;
    }

    function tumbuh()
    {
        return "buah $this->namabuah itu tumbuh !";
    }

    function busuk()
    {
        return "buah $this->namabuah itu busuk!";
    }
}
$objek =  new buah("sirsak","Merah","Manis", "Harum");
echo $objek->tumbuh();
echo "<br/>";
echo $objek->busuk();



//$objekbuah = new buah();
//echo $objekbuah->namabuah = "jeruk";
//echo "<br/>";
//echo $objekbuah->warnaKulit = "kuning";
//echo "<br/>";
//echo $objekbuah->rasa = "manis";
//echo "<br/>";
//echo $objekbuah->aroma = "segar";
//echo "<br/>";
//echo $objekbuah->tumbuh();
//echo "<br/>";
//echo $objekbuah->busuk();
