<?php
echo "Diseñar e implementar una clase llamado Perro que herede de Animal y que
tiene datos de instancia que representa el nombre del perro y la edad (agregar
las propiedades necesarias en la clase Animal). Definir el constructor del perro
para inicializar los datos de instancia. Incluya los métodos get y set. Incluir un
método para calcular y devolver la edad del perro en 'años-persona' (siete veces
la edad del perro). Incluir un método to_string que devuelva una descripción del
perro. El método to_string debe ser polimórfica. El nombre y la edad deben ser
atributos privados (encapsulados) y los métodos deben ser la forma de acceder
a los valores.<br/><br/>";
class Animal{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function toString(){
        return "Soy un animal ".$this->nombre;
    }
}
class Perro extends Animal{
     
    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }

    public function getEdad(){
        return parent::getEdad() * 7;
    }
    public function toString(){
        return "Soy ". parent::getNombre()." un perro ";
        echo "<br/>";
    }
}

$miPerrito = new Perro("Puppy", 4);

echo "<u>Nombre del animal:</u> ";
print($miPerrito->getNombre());
echo "<br/>";
echo "<br/>";
echo "<u>Edad del animal:</u> ";
print($miPerrito->getEdad());
echo " años.<br/>";
echo "<br/>";
print($miPerrito->toString());
echo "<br/>";
echo "<br/>";

$miPerrito = new Perro("Firulais", 8);

echo "<u>Nombre del animal:</u> ";
print($miPerrito->getNombre());
echo "<br/>";
echo "<br/>";
echo "<u>Edad del animal:</u> ";
print($miPerrito->getEdad());
echo " años.<br/>";
echo "<br/>";
print($miPerrito->toString());
echo "<br/>";
echo "<br/>";
?>