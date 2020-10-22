<?php
    require_once "modulos/head.php";
    require_once "modulos/menu.php";
    require_once "modulos/serv.php";
    $datos = contenido();

    for ($i = 0; $i < count($datos); $i++) { 
        $d = explode("||", $datos[$i]);
?>

    <section class="sec_servicio servicio_<?php echo $i;?>">
        <div class="blur">
            <div class="contenedor">
                <div class="img">
                    <?php 
                        if ($i == 1) {
                            require_once "IMG/serv_5.php";
                        } else if ($i == 3) {
                            require_once "IMG/serv_0.php";
                        }
                    ?>
                </div>
                <div class="descripcion">
                    <h1><?php echo $d[1];?></h1>
                    <p><?php echo $d[2];?></p>
                </div>
            </div>
        </div>
    </section>

<?php 
    }

    require_once "modulos/footer.php";
?>