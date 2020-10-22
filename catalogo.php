<?php
    require_once "modulos/head.php";
    require_once "modulos/menu.php";
?>
    <section class="catalogo">
        <?php require_once "modulos/filtros.php";?>
        <div class="contenedor">
            <h2>Catálogo</h2>
            <span class="material-icons icono-filtros">filter_alt</span>
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="vestido">
                    <?php 
                        if ($i < 3) {
                            echo "<span class=\"material-icons\">local_offer</span>";
                        }
                    ?>
                    <div class="foto">                  
                        <div class="botones">
                            <button><i class="material-icons">visibility</i></button>
                            <button><i class="material-icons">add_shopping_cart</i></button>
                        </div>
                        <img src="IMG/of_<?php echo $i+1;?>.jpg" alt="">
                    </div>
                    <div class="info_v">
                        <p>Diseñador</p>
                        <p>Folio</p>
                        <p>Precio: $000.00</p>
                    </div>
                </div>
            <?php } ?>
            <div class="paginas">
                <ul>
                    <li><a class="active" href="">1</a></li>
                    <li><a class="" href="">2</a></li>
                    <li><a class="" href="">3</a></li>
                    <li><a class="" href="">4</a></li>
                    <li><a class="" href="">5</a></li>
                </ul>
            </div>
        </div>
    </section>

<?php 
    require_once "modulos/footer.php";
?>
