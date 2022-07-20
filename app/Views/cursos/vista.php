<?=$cabecera ?>
<h1 class="display-7 fw-bold">Cursos</h1>
<br/>
<a class="btn btn-success" href="<?=base_url('cursos/crear') ?>">Nuevo</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Nro</th>
                    <th>Curso</th>
                    <th>Dias</th>
                    <th>Horas por Dia</th>
                    <th>Costo</th>
                    <th>Facilitador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($cursos as $curso): ?>
                <tr>
                    <td><?=$curso['id']; ?></td>
                    <td><?=$curso['curso']; ?></td>
                    <td><?=$curso['dias']; ?></td>
                    <td><?=$curso['horas_por_dia']; ?></td>
                    <td><?=$curso['costo']; ?></td>                                
                    <?php foreach($facilitadores as $facilitador ): ?>
                        <?php if($facilitador['id'] == $curso['fac_id']): ?>
                            <td><?=$facilitador['nombre']; ?> <?=$facilitador['apellido']; ?></td>    
                            <?php endif ?>
                    <?php endforeach; ?>
                    <td>
                        <a href="<?=base_url('cursos/editar/'.$curso['id']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('cursos/borrar/'.$curso['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie ?>