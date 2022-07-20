<?=$cabecera ?>
<h1 class="display-7 fw-bold">Capacitaciones</h1>
<br/>
<a class="btn btn-success" href="<?=base_url('capacitaciones/crear') ?>">Nuevo</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Nro</th>
                    <th>Curso</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Finalizacion</th>
                    <th>Facilitador</th>
                    <th>Participante</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($capacitaciones as $capacitacion): ?>
                <tr>
                    <td><?=$capacitacion['id']; ?></td>
                    <?php foreach($cursos as $curso ): ?>
                        <?php if($curso['id'] == $capacitacion['curso_id']): ?>
                            <td><?=$curso['curso']; ?></td>   
                            <?php $cur=$curso['fac_id']?>
                            <?php endif ?>
                    <?php endforeach; ?>                    
                    <td><?=$capacitacion['fecha_inicio']; ?></td>
                    <td><?=$capacitacion['fecha_fin']; ?></td>
                    <?php foreach($facilitadores as $facilitador ): ?>
                        <?php if($facilitador['id'] == $cur): ?>
                            <td><?=$facilitador['nombre']; ?> <?=$facilitador['apellido']; ?></td>    
                            <?php endif ?>
                    <?php endforeach; ?>
                    <?php foreach($participantes as $participante ): ?>
                        <?php if($participante['id'] == $capacitacion['participante_id']): ?>
                            <td><?=$participante['nombre']; ?> <?=$participante['apellido']; ?></td>    
                            <?php endif ?>
                    <?php endforeach; ?>
                    <td>
                        <a href="<?=base_url('capacitaciones/editar/'.$capacitacion['id']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('capacitaciones/borrar/'.$capacitacion['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie ?>