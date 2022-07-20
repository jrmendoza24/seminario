<?=$cabecera ?>
<h1 class="display-7 fw-bold">Facilitadores</h1>
<br/>
<a class="btn btn-success" href="<?=base_url('facilitadores/crear') ?>">Nuevo</a>
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
            <?php foreach($facilitadores as $facilitador): ?>
                <tr>
                    <td><?=$facilitador['id']; ?></td>
                    <td><?=$facilitador['nombre']; ?></td>
                    <td><?=$facilitador['apellido']; ?></td>
                    <td><?=$facilitador['ci']; ?></td>
                    <td><?=$facilitador['email']; ?></td>
                    <td><?=$facilitador['celular']; ?></td>
                    <td>
                        <a href="<?=base_url('facilitadores/editar/'.$facilitador['id']);?>" class="btn btn-info" type="button">Editar</a>
                        <a href="<?=base_url('facilitadores/borrar/'.$facilitador['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<?=$pie ?>