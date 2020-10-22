<?php
    require_once "modulos/head.php";
    require_once "modulos/menu.php";
?>

    <section class="contacto">
        <h2>Formulario de contacto.</h2>
        <div class="formulario">            
            <form action="" method="">
                <label for="">Nombre: </label>
                <input type="text" name="" id="" placeholder="Nombre completo" required>
                <label for="">Correo electronico: </label>
                <input type="text" name="" id="" placeholder="correo@gmail.com" required>
                <label for="">Asunto: </label>
                <textarea name="" id="" cols="30" rows="5" placeholder="Asunto..." required></textarea>
                <button type="submit">Enviar</button>    
            </form>
        </div>
        <div class="img">
            <?php require_once "IMG/contact.php"; ?>
        </div>
    </section>

<?php 
    require_once "modulos/footer.php";
?>