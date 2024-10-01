<?php
class Persona
{
    private $nombre;
    private $telefono;

    public function __construct($nomb, $tel)
    {
        $this->nombre = $nomb;
        $this->telefono = $tel;
    }

    public function obtener_datos()
    {
        return "Nombre: ".$this->nombre." / Telefono: ".$this->telefono;
    }
}
class Alumno extends Persona
{
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno)
    {
        parent::__construct($nomb,$tel);
        $this->grado = $grado;
        $this->turno = $turno;
    }
    
    public function obtener_datos()
    {
        return parent::obtener_datos(). " / Grado: ".$this->grado." / Turno: ".$this->turno;
    }
}
?>
<h3>Crear un objeto array de la clase alumno</h3>
<?php
    $alumnos = array();
    $alumnos[0]= new Alumno("Camila", " 0961123466", " Tercero - Nivel Medio", " Tarde <br>");
    $alumnos[1] = new Alumno("Marcelo", " 0978945612", " Tercero - Nivel Medio", " Tarde <br>");
    $alumnos[2] = new Alumno("Lucia", " 09895641345", " Segundo - Nivel Medio", " Mañana");
?>

<h3>Imprimir sus datos con foreach</h3>
<?php
foreach($alumnos as $a)
{
    print($a->obtener_datos(). "<br>");
}
?>