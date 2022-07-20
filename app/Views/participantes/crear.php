<?=$cabecera ?>
<h1 class="display-7 fw-bold">Participantes</h1>
<br/>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del Participante</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('participantes/guardar')?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input id="apellido" class="form-control" type="text" name="apellido">
        </div>
        <div class="form-group">
            <label for="ci">C.I.:</label>
            <input id="ci" class="form-control" type="number" name="ci">
        </div>
        <div class="form-group">
            <label for="email">Correo Electronico:</label>
            <input id="email" class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input id="celular" class="form-control" type="number" name="celular">
        </div>
        <br/>
        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="<?=base_url('participantes/vista');?>" class="btn btn-info">Cancelar</a>
    </form>
    
            </p>
        </div>
    </div>
    
<?=$pie ?>