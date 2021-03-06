<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Subir Convocatoria</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">






    <script src="js/dropzone.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- iconos -->
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>



<div class="header">
    <div class="logo-title1">
        <img src="image/logo_magtimus.png">
        <h2>Subir Convocatoria</h2>
    </div>
    <div class="menu">
        <a href="principal-adm.php">
            <li class="module-convocatorias">Atrás</li>
        </a>
        <a href="./controlador.php?gui=convocatoria">
            <li class="module-modificar">Gestionar Convocatoria</li>
        </a>
        <a href="cerrar.php">
            <li class="module-convocatorias">Cerrar Sesión</li>
        </a>
    </div>
</div>
<style>

</style>
<form class="container formulario" action="subir-convocatoria.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <span class="BoldText"> Sube tu Convocatoria!</span>
    </div>

    <body class="body container">
        <div class="container ">
            <div class="container">
                <div class="div requisitos">
                    <div class="container column gray-boxes" style="width: 200px; height: 200px; margin-bottom: 50px;">
                    <span style="width: 100%;font-weight: 300;font-size: 20px;color: #898989;font-weight: bold;"> Requisitos:</span>
                        <ul>
                            <textarea name="requisitos" id="requisitos" class="textArea" >

                            </textarea>
                        </ul>
                    </div>
                </div>


                <div class="container manutencion" style="width: 200px; height: 250px;text-align: center;font-size: 34px;margin-left: 10px;margin-top: -4px;font-weight: bold;color: #5584FF;">

                    <div class="column manutencion">
                        <input type="text" name="nombreConvo" id="nombreConvo" class="nombreConvo" placeholder="Convocatoria">
                    </div>

                </div>

                <div class="container  gray-boxes" style="width: 200px; height: 200px;  margin-bottom: 50px;font-weight: 300;font-size: 20px;color: #898989;font-weight: bold;">
                    <span>Archivos necesarios:</span>
                    <ul>

                        <textarea name="archivosNecesarios" id="archivosNecesarios" class="textArea">

                        </textarea>

                    </ul>
                </div>

            </div>

        </div>



        <input type="file" name="pdf" id="pdf" enctype="multipart/form-data" style="width: 600px; height: 200px; margin: 10px; border-radius: 0px; color: #282638;">
        <div class="container" style="width: 100%; justify-items: flex;  margin-top: 10px;">
            <button action="index-adm.php">Atrás</button>
            <a href="subir-convocatria.php">
                <button style="margin-left: 10px;">Guardar</button>
</form> </a>
<?php if (!empty($error)) : ?>
    <div class="mensaje">
        <?php echo $error; ?>
    </div>
<?php endif;
?>
</div>

</div>
</div>




<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</body>

</html>