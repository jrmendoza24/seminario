<?=$cabecera ?>
<h1 class="display-7 fw-bold">Cursos</h1>
<br/>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del Curso</h5>
            <p class="card-text">
            <form method="post" action="<?=site_url('cursos/guardar')?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="curso">Curso:</label>
            <input id="curso" class="form-control" type="text" name="curso">
        </div>
        <div class="form-group">
            <label for="dias">Dias:</label>
            <input id="dias" class="form-control" type="number" name="dias">
        </div>
        <div class="form-group">
            <label for="horas_por_dia">Horas por Dia:</label>
            <input id="horas_por_dia" class="form-control" type="number" name="horas_por_dia">
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input id="costo" class="form-control" type="number" name="costo">
        </div>
        
        <div class="form-group">
            <label for="fac_id">Facilitador:</label>
            <select name="fac_id" id="fac_id" class="form-control">
            <?php foreach($facilitadores as $facilitador): ?>
                <option value="<?=$facilitador['id']?>"><?=$facilitador['nombre']?> <?=$facilitador['apellido']?></option>
            <?php endforeach; ?>
            </select>
        </div>
        
        <br/>
        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="<?=base_url('cursos/vista');?>" class="btn btn-info">Cancelar</a>
    </form>
    
            </p>
        </div>
    </div>
    
<?=$pie ?>