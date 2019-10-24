<?php $contador = 0?>
<!doctype html>
<html lang="es">
  <head>
    <?php
      require_once("./template/partials/link.php");
    ?>
  </head>
  <body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <div class="container">
      <?php
        require_once("./template/partials/head.php");
        require_once("./template/menu.php");
      ?>
    <section> 
        <article>
              
			  <table class="table table-striped">
          <tr>
            <th colspan="10">Articulos</th>
          </tr>
          <tr>
            <?php foreach ($cabecera as $atributo):?>
            <th>
              <?=$atributo;?>
            </th> 
          <?php endforeach;?>
          
          <th>Acciones</th>
          <?php foreach ($tabla as $key => $libro):?>
            <?php $contador++?>
              <tr>
                  <?php foreach($libro as $valor):?>
                    <td><?=$valor;?></td>
                  <?php endforeach;?>
                  <td>
                    <a href="eliminar.php?indice=<?=$key?>" title="borrar">
                      <i class="material-icons">clear</i>
                    </a>
                    <a href="form_editar.php?indice=<?=$key?>" title="Editar">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="describir.php?indice=<?=$key?>" title="Describir">
                      <i class="material-icons">description</i>
                    </a>
                </td>
              </tr>
            <?php endforeach;?>
        </table>
            <p>Nº de artículos: <?=$contador?></p>
          </article>
      </section>
      <?php 
        require_once("./template/partials/footer.php");
      ?>
    </div>
  </body>
</html>