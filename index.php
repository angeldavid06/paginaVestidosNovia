<?php
    require_once "modulos/head.php";
    require_once "modulos/menu.php";
    require_once "modulos/serv_prev.php";
?>
    <section class="banner">
        <div class="contenedor">  
            <div class="blur blur-hover">
                <div class="info">
                    <h1>Temporada de otoño e invierno</h1>
                    <a href="catalogo.php">Ir al catálogo</a>
                </div>
            </div>          
        </div>
    </section>
    <section class="ofertas">
        <h1>Descuentos</h1>
        <div class="contenedor">
            <?php 
                for ($i=1; $i <= 3; $i++) {
            ?>
                <div class="oferta">
                    <span class="material-icons">local_offer</span>
                    <div class="foto">                    
                        <img src="IMG/of_<?php echo $i;?>.jpg" alt="">
                    </div>
                    <div class="info_v">
                        <p>Diseñador</p>
                        <p>Folio</p>
                        <p>Precio: $000.00</p>
                    </div>
                </div>
            <?php 
                }
            ?>
            <div class="enlace">
                <a href="catalogo.php">Catálogo completo</a>
            </div>
        </div>
    </section>
    <section class="servicios">
        <h1>Servicios</h1>
        <div class="contenedor">
            <?php
                $datos = contenido();

                for ($i = 0; $i < count($datos); $i++) { 
                    $d = explode("||", $datos[$i]);
            ?>
                <div class="servicio">
                    <div class="icono">
                        <i class="material-icons"><?php echo $d[0];?></i>
                    </div>
                    <div class="info_s">
                        <h2><?php echo $d[1];?></h2>
                        <p><?php echo $d[2];?></p>
                    </div>
                </div>
            <?php
                }
            ?>
            <div class="enlace">
                <a href="./servicios.php">Más Información</a>
            </div>
        </div>
    </section>

<?php 
    require_once "modulos/footer.php";
?>