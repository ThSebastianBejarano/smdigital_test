
<?php require RUTA_MAIN . '/Views/Layouts/Header.php'; ?>

<!-- MODAL ADD-->
<?php require RUTA_MAIN . '/Views/Modals/addmodal.php'; ?>

<!-- MODAL EDIT-->
<?php require RUTA_MAIN . '/Views/Modals/editmodal.php'; ?>

<!-- MODAL DELETE-->
<?php require RUTA_MAIN . '/Views/Modals/deletemodal.php'; ?>


<main class="mt-5">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12 fw-bold fs-3">LISTADO DE DOCTORES NACIONALES</div>   
        </div>

        <hr class="dropdown-dividor" />

        <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5 pe-5">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" id="caja">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#addmodal"><i class="bi bi-plus-lg"></i></button>
        </div>

        <div id="datos">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['Datos'] as $key):?>

                <tr>
                <td><?php echo $key['id']; ?></td>
                <td><?php echo $key['name']; ?></td>
                <td><?php echo $key['email']; ?></td>
                <td><?php echo $key['direccion']; ?></td>
                <td><?php echo $key['ciudad']; ?></td>
                <td>
                    <!--<a href="<?php echo RUTA_URL;?>Home/edit/<?php echo $key['id'];?>" class="btn btn-primary"><i class="bi bi-pen"></i></a>-->
                    <button class="btn btn-primary botonedit" type="button" data-bs-toggle="modal" data-bs-target="#editmodal"><i class="bi bi-pen"></i></button>
                    <!--<button class="btn btn-danger botondelete" type="button" onclick="deleteConfirm('<?php echo RUTA_URL;?>', <?php echo $key['id']; ?>)"><i class="bi bi-x-lg"></i></button>-->
                    <button class="btn btn-danger botondelete" type="button" data-bs-toggle="modal" data-bs-target="#deletemodal"><i class="bi bi-x-lg"></i></button>
                </td>
                </tr>            

            <?php endforeach; ?>
            </tbody>
        </table>
        </div>

    </div>
</main>

<?php require RUTA_MAIN . '/Views/Layouts/Footer.php'; ?>