<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />
    <title><?php echo $title; ?></title>
</head>
<body>
    
    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>codigo</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php 
                            foreach($rutas as $ruta){ ?>
                        <tr>
                            <td><?php echo $ruta['id']; ?></td>
                            <td><?php echo $ruta['nombre']; ?></td>
                            <td><?php echo $ruta['codigo']; ?></td>
                        </tr>
                            <?php }
                        ?>
                    
                    </tbody>
                </table>
    <a href="<?php echo site_url('Procesador/agregar')?>">Agregar Ruta</a>
</body>
</html>