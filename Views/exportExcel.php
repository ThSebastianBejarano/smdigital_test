<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=lista-doctores.xls");

?>

<table border="1">
    <caption style="background-color:#232323; color:white; font-weight:bold;">Listado de Doctores</caption>
        <tr>
        <th style="background:#D1D1D1; color:black;" scope="col">Id</th>
        <th style="background:#D1D1D1; color:black;" scope="col">Name</th>
        <th style="background:#D1D1D1; color:black;" scope="col">Email</th>
        <th style="background:#D1D1D1; color:black;" scope="col">Direccion</th>
        <th style="background:#D1D1D1; color:black;" scope="col">Ciudad</th>
        </tr>
    <?php foreach ($data['Datos'] as $key):?>

        <tr>
        <td><?php echo $key['id']; ?></td>
        <td><?php echo $key['name']; ?></td>
        <td><?php echo $key['email']; ?></td>
        <td><?php echo $key['direccion']; ?></td>
        <td><?php echo $key['ciudad']; ?></td>
        </tr>            

    <?php endforeach; ?>
</table>