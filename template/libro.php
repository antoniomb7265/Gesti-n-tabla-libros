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

            <?php foreach ($cabecera as $atributo):?>
            <th>
              <?=$atributo;?>
            </th> 
          <?php endforeach;?>
          
          <th>Acciones</th>
            <?php foreach ($tabla as $key => $libro):?>
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
                  </td>
                </tr>
            <?php endforeach;?>

            </table>
          </article>
      </section>
    </div>
  </body>
  <?php 
    require_once("./template/partials/footer.php");
  ?>
</html>