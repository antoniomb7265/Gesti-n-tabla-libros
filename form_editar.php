<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);

    $key = $_GET['indice'];
    $registro = $tabla[$key];
    
    $titulo = $registro['Titulo'];
    $autor = $registro['Autor'];
    $editorial = $registro['Editorial'];
    $genero = $registro['Género'];
    $precio = $registro['Precio'];

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
                <?php require_once("./template/partials/form_editar.php"); ?>
            </article>
        </section>
        </div>
        <?php 
            require_once("./template/partials/footer.php");
        ?>
    </body>
</html>