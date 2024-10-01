<?php
class Automovil
{
    public $color;
    public $motor;
    public $marca;

    public function obtener_color()
    {
        return $this-> color;
    }
    public function obtener_motor()
    {
        return $this-> motor;
    }
    public function obtener_marca()
    {
        return $this-> marca;
    }
}
$auto1 = new Automovil();
$auto1 -> color = 'Verde';
$auto1 -> motor = '2.0';
$auto1 -> marca = 'Ford';

$auto2 = new Automovil();
$auto2 -> color = "Gris";
$auto2 -> motor = '1.5';
$auto2 -> marca = 'Toyota';

$auto3 = new Automovil();
$auto3 -> color = 'Rojo';
$auto3 -> motor = '2.5';
$auto3 -> marca = 'Nissan'

?>
<h3>Imprimir la marca del auto, su color y su motor</h3>
<?php
    echo "Primer auto es de la Marca: ".$auto1->obtener_marca(), ", su motor es de: ".$auto1->obtener_motor(), ", del color ".$auto1->obtener_color(), ".<br>";
    echo "Segundo auto es de la Marca: ".$auto2->obtener_marca(), ", su motor es de: ".$auto2->obtener_motor(), ", del color ".$auto2->obtener_color(), ".<br>";
    echo "Tercer auto es de la Marca: ".$auto3->obtener_marca(), ", su motor es de: ".$auto3->obtener_motor(), ", del color ".$auto3->obtener_color(), ".";
?>