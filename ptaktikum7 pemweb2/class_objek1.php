<?php
class mamalia
{
    public $jumlahKaki = 4;
    public $berekor;
    function menyusui()
 {
    return "Hewan menyusui";
 }

    function melahirkan()
    {
        return "Hewan melahirkan";
    }
}

$objekMamalia = new mamalia();
echo $objekMamalia->melahirkan();
echo "<br/>";
echo $objekMamalia->menyusui();
echo "<br/>";
echo $objekMamalia->jumlahKaki = 2;


