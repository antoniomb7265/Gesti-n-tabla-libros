<form method="POST" action="index.php">
    <div class="form-group">
        <label for="exampleInputEmail2">ID</label>
        <input type="text" name="formtitulo" class="form-control" id="inputtitulo" value="<?= $Id?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" name="formtitulo" class="form-control" id="inputtitulo" value="<?= $Descripcion?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Modelo</label>
        <input type="text" name="formautor" class="form-control" id="inputautor" value="<?= $Modelo?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Categoria</label>
        <input type="text" name="formcategoria" class="form-control" id="inputcategoria" value="<?= $Categoria?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Unidades</label>
        <input type="text" name="formeditorial" class="form-control" id="inputeditorial" value="<?= $Unidades?>" disabled>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="formprecio" class="form-control" id="inputprecio" value="<?= $Precio?>" disabled>
    </div>
    <div>
    <button href="index.php" class="btn btn-primary">Cancelar</button>
    </div>
</form>