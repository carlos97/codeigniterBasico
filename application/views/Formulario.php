<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />
    <title><?php echo $title; ?></title>
</head>
<body>
    
            <div style="max-width: 80%;margin-left: 40px">
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>latitud</th>
                            <th>longitud</th>
                            <th>ruta</th>
                            <th>actualizar</th>
                            <th>eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php 
                            foreach($estacion as $estacion){ ?>
                        <tr>
                            <td><?php echo $estacion['id']; ?></td>
                            <td><?php echo $estacion['nombre']; ?></td>
                            <td><?php echo $estacion['latitud']; ?></td>
                            <td><?php echo $estacion['longitud']; ?></td>
                            <td><?php echo $estacion['ruta']; ?></td>
                            <td><a href="<?php echo site_url('Procesador/actualizar/'.$estacion['id'].'/')?>">actualizar</a></td>
                            <td><a href="<?php echo site_url('Procesador/eliminar/'.$estacion['id'].'/')?>">eliminar</a></td>
                        </tr>
                            <?php }
                        ?>
                    
                    </tbody>
                </table>
                <a href="<?php echo site_url('Procesador/agregarEstacion')?>">Agregar Estacion</a>
            </div>
</body>
</html>