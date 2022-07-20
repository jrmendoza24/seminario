<?=$cabecera ?>
<h1 class="display-7 fw-bold">Capacitacion</h1>
<br/>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la Capacitacion</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('capacitaciones/actualizar')?>" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$capacitacion['id']?>" >
        <div class="form-group">
            <label for="curso_id">Curso:</label>
            <select name="curso_id" id="curso_id" class="form-control">
            <?php foreach($cursos as $curso): ?>
                <option value="<?=$curso['id']?>"><?=$curso['curso']?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input id="fecha_inicio" value="<?=$capacitacion['fecha_inicio']?>" class="form-control" type="date" name="fecha_inicio">
        </div>        
        <div class="form-group">
            <label for="participante_id">Participante:</label>
            <select name="participante_id" id="participante_id" class="form-control">
            <?php foreach($participantes as $participante): ?>
                <option value="<?=$participante['id']?>"><?=$participante['nombre']?> <?=$participante['apellido']?></option>
            <?php endforeach; ?>
            </select>
        </div>
        
        <br/>
        <button class="btn btn-success" type="submit">Actualizar</button>
        <a href="<?=base_url('capacitaciones/vista');?>" class="btn btn-info">Cancelar</a>
    </form>
    
            </p>
        </div>
    </div>
    
<?=$pie ?>