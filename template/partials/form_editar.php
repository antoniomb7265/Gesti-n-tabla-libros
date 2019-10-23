<form method="POST" action="editar.php?indice=<?=$key?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Título</label>
        <input type="text" name="formtitulo" class="form-control" id="inputtitulo" value="<?= $titulo?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Autor</label>
        <input type="text" name="formautor" class="form-control" id="inputautor" value="<?= $autor?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoría</label>
        <input type="text" name="formcategoria" class="form-control" id="inputcategoria" value="<?= $genero?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Editorial</label>
        <input type="text" name="formeditorial" class="form-control" id="inputeditorial" value="<?= $editorial?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio" value="<?= $precio?>">
    </div>
    <div>
    <button href="index.php" class="btn btn-secondary">Cancelar</button>
    <button type="reset" class="btn btn-secondary">Resetear</button>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>