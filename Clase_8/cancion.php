<?php
    include 'conexion.php';
 
    $sql = "select c.nombre, c.autor, g.descripcion from cancion c join genero g on c.genero_id= g.id where nickname like 'oliver'";
    
    $sqlGenero ="select * from genero";
    $resultado = $conn->query($sql);
?>
<h3>Lista de canciones</h3>
<table class="table table-striped">
    <?php
        echo "<tr>  |   Canción |";
        echo "<tr>  |   Autor   |";
        echo "<tr>  |   Genero   |";
        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>| ".$fila["nombre"]."   | </td> ";
                echo "<td>".$fila["autor"]."    |   </td>";
                echo "<td>".$fila["descripcion"]."  |   </td>";
            }
        }else{
            echo "No tienes canciones aún :(";
        }
    ?>
</table>
<div class="col-sm-4">
    <h4>Agrega la canción.</h4>
    <form method="post" action="controladorcancion.php">
        <input type="text" name="autor" placeholder="Autor" class="form-control" required>
        <input type="text" name="nombre" placeholder="Título" class="form-control" required>
        <select name="genero_id" required>
            <option value="1">ROCK</option>
            <option value="2">POP</option>
        </select>
        <input type="hidden" name="nickname" value="oliver">
        <input type="submit" value="Agregar canción" class="btn btn-outline-dark">
    </form>
</div>