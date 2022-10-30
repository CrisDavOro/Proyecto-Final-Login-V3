<?php
    include("conexion.inc");
    $array = [];
    $id_usuario = $_SESSION['idUsuario'];
    $query = "SELECT libros.id_libro, libros.titulo, autores.nombre AS 'autor', generos.nombre AS 'genero', libros.saga, libros.descripcion, libros.paginas_totales FROM libros, autores, generos, favoritos WHERE libros.fk_autor = autores.id_autor AND libros.fk_genero = generos.id_genero AND favoritos.fk_usuario = '$id_usuario' AND favoritos.fk_libro = libros.id_libro";

    $resultado = mysqli_query($conexion, $query);
    $cant_filas = mysqli_num_rows($resultado);
    $fila = mysqli_fetch_assoc($resultado);
    for($i=0; $i < $cant_filas; $i++){
        $obj = new stdClass();

        $obj->id = $fila["id_libro"];
        $obj->titulo = $fila["titulo"];
        $obj->autor = $fila["autor"];
        $obj->genero = $fila["genero"];
        $obj->saga = $fila["saga"];
        $obj->descripcion = $fila["descripcion"];
        $obj->paginas = $fila["paginas_totales"];
        $obj->pdf = '../../assets/pdf/'. $fila["titulo"] . '.pdf';
        $obj->portada = '../../assets/portada/'. $fila["titulo"].'.png';

        array_push($array, $obj);
        $fila = mysqli_fetch_assoc($resultado);
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    $objDatos = new stdClass();
    $objDatos->id_usuario = $id_usuario;
	$objDatos->libros = $array;
	$objDatos->cantidad = count($array);

    echo json_encode($objDatos);
?>