<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);

    $key = $_GET['indice'];

    $registro = $tabla[$key];

    $Id = $registro['Id'];
    $Descripcion = $registro['Descripcion'];
    $Modelo = $registro['Modelo'];
    $Categoria = $registro['Categoria'];
    $Unidades = $registro['Unidades'];
    $Precio = $registro['Precio'];

    require_once("lib/funcionesTabla.php");
?>
<!doctype html>
<?php
    require_once("./template/partials/link.php");
?>
<div class="container">
    <body>
        <?php
            require_once("./template/partials/head.php");
            require_once("./template/menu.php");
        ?>
        <section> 
            <article>
                <legend>Descripción articulo</legend>
                <?php require_once("./template/partials/form_describir.php"); ?>
            </article>
        </section>
        <?php 
            require_once("./template/partials/footer.php");
        ?>
        </div>
    </body>
</html>