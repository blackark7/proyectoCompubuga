<?php 
$id = filter_input(INPUT_GET,'id');
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="modificarFotoUsuarioControlador.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" id="" required>
                <p class="help-block">Por favor suba una foto de perfil</p>
            </div>
            <hr>
            <input type="submit" value="guardar">          
        </form>


    </body>
</html>
