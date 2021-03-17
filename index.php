<?php 

echo '<h1>Reflex</h1>';

// ===========================================================
// CLASS REFLEX
class reflex {

    public $brand;
    public $modello;
    public $prezzo;
    public $obiettivo;

    public function __construct($brand, $modello, $prezzo, $obiettivo){

        $this->brand = $brand;
        $this->modello = $modello;
        $this->prezzo = $prezzo;
        $this->obiettivo = $obiettivo;

    }
}

// REFLEX
$firstReflex = new Reflex('nikon', 'D7000', '850euro', '18-105mm');
$secondReflex = new Reflex('nikon', 'D300', '1750euro', '50mm');
$thirdReflex = new Reflex('canon', 'EOS-M50', '600euro', '18-55mm');

echo '<h3> print Reflex </h3>';

var_dump($firstReflex);
echo '<br>';
var_dump($secondReflex);
echo '<br>';
var_dump($thirdReflex);
echo '<hr>';

