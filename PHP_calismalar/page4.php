<?php

class Sekil() 
{
    public $kenar1=7;
    public $kenar2=12;
    public $kenar3=5;
    public $yukseklik=8;
}

class Dikdortgen extends Sekil {
    public function dikdortgenAlan($kenar1,$kenar2)
    {
        return $kenar1*$kenar1;
    }
    public function dikdortgenCevre($kenar1,$kenar2)
    {
        return (2*($kenar1+$kenar1));
    }
}

class Kare extends Sekil {
    public function kareAlan($kenar1)
    {
        return $kenar1*$kenar1;
    }
    public function kareCevre($kenar1)
    {
        return (4*$kenar1);
    }
}

class Ucgen extends Sekil {
    public function ucgenAlan($kenar3,$yukseklik)
    {
        return (($kenar3,$yukseklik)/2);
    }
    public function ucgenCevre($kenar1,$kenar2,$kenar3)
    {
        return $kenar1+$kenar2+$kenar3;
    }
}

$rectangular = new Dikdortgen();
echo "Dikdörtgenin alanı: ". $rectangular->dikdortgenAlan(7,12);
echo "<br>";
echo "Dikdörtgenin çevresi: ". $rectangular->dikdortgenCevre(7,12);
echo "<br>";
$square = new Kare();
echo "Karenin alanı: ". $square->kareAlan(5);
echo "<br>";
echo "Karenin çevresi: ". $square->kareCevre(5);
echo "<br>";
$triangle = new Ucgen();
echo "Üçgenin alanı: ". $triangle->ucgenAlan();
echo "<br>";
echo "Üçgenin çevresi: ". $triangle->ucgenCevre();
echo "<br>";
?>