<?php
class motor
{
    public $merk;
    public $cc;
    public $transmisi;


    function jalan()
    {
        return "merk motor $this->merk berjalan dijalan raya";
    }

    function turing()
    {
        return "motor $this->merk bisa ngerem !";
    }

    function ngerem()
    {
        return "motor $this->merk bisa ngerem";
    }

    function ngegas()
    {
        return "motor $this->merk ini ngegas 
                dan transmisinya $this->transmisi";
    }
}

$motor = new motor;
$motor->merk = "yamaha f1z 110";
$motor->cc = 110;
$motor->transmisi = "manual";
echo $motor->jalan();
echo "</br>";
echo $motor->turing();
echo "</br>";
echo $motor->ngerem();
echo "</br>";
echo $motor->ngegas();
echo "</br>";