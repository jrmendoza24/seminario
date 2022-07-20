<?=$cabecera ?>
<h1 class="display-7 fw-bold">Participantes</h1>
<br/>
<a class="btn btn-success" href="<?=base_url('participantes/crear') ?>">Nuevo</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CI</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($participantes as $participante): ?>
                <tr>
                    <td><?=$participante['id']; ?></td>
                    <td><?=$participante['nombre']; ?></td>
                    <td><?=$participante['apellido']; ?></td>
                    <td><?=$participante['ci']; ?></td>
                    <td><?=$participante['email']; ?></td>
                    <td><?=$participante['celular']; ?></td>
                    <td>
                        <a href="<?=base_url('participantes/editar/'.$participante['id']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('participantes/borrar/'.$participante['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie ?>