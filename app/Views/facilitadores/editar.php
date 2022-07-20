<?=$cabecera ?>
<h1 class="display-7 fw-bold">Facilitadores</h1>
<br/>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del Facilitador</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('facilitadores/actualizar')?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?=$facilitador['id']?>" >
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input id="nombre" value="<?=$facilitador['nombre'] ?>" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input id="apellido" value="<?=$facilitador['apellido']?>" class="form-control" type="text" name="apellido">
        </div>
        <div class="form-group">
            <label for="ci">C.I.:</label>
            <input id="ci" value="<?=$facilitador['ci']?>" class="form-control" type="number" name="ci">
        </div>
        <div class="form-group">
            <label for="email">Correo Electronico:</label>
            <input id="email" value="<?=$facilitador['email']?>" class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input id="celular" value="<?=$facilitador['celular']?>" class="form-control" type="number" name="celular">
        </div>
        <br/>
        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="<?=base_url('facilitadores/vista');?>" class="btn btn-info">Cancelar</a>
    </form>
    
            </p>
        </div>
    </div>
    
<?=$pie ?>