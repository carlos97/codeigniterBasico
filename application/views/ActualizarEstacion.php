<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    <form method="post" action="" class="form" style="max-width: 500px">
        <div class="form-group">
            <label for="nombre">actualiza Estación</label>
            <input class="form-control" type="text" name="nombre" placeholder="Nombre de la estación" value="<?php echo $estacion[0]['nombre']; ?>" >
            <input class="form-control" type="text" name="latitud" placeholder="latitud de la estación" value="<?php echo $estacion[0]['latitud']; ?>" >
            <input class="form-control" type="text" name="longitud" placeholder="longitud de la estación" value="<?php echo $estacion[0]['longitud']; ?>" >
            <input class="form-control" type="text" name="codigoRuta" placeholder="codigo de la ruta" value="<?php echo $estacion[0]['ruta']; ?>" >
            <input class="form-control" type="submit" name="postSubmit" value="Aceptar"/>
        </div>
    </form>
</body>
</html> 