<form method="POST" action="editar.php?indice=<?=$key?>">
<div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" name="formtitulo" class="form-control" id="inputtitulo" value="<?= $Descripcion?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Modelo</label>
        <input type="text" name="formautor" class="form-control" id="inputautor" value="<?= $Modelo?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoria</label>
        <select class="form-control" name="formcategoria">
            <?php foreach($desplegable as $llave => $valor):?>
                <?php if ($valor == $Categoria):?>
                    <option selected="selected" value="<?=$llave?>">
                        <?=$valor;?>
                    </option>
                <?php else:?>
                    <option value="<?=$llave?>">
                        <?=$valor;?>
                    </option>
                <?php endif ?>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Unidades</label>
        <input type="text" name="formeditorial" class="form-control" id="inputeditorial" value="<?= $Unidades?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio" value="<?= $Precio?>">
    </div>
    <div>
    <a href="index.php" class="btn btn-danger">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Resetear</button>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>