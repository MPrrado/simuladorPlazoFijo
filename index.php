<?php
    require_once('php/encabezado.php');

?>
<section class="">
    <article>
        <form action="php/control.php" method="post">
            <legend>DATOS A SIMULAR</legend>
            <section>
                <label for="tna">TNA: </label>
                <input type="number" id="tna" name="tna" required placeholder="40">
            </section>
            <section>
                <label for="plazo">PLAZO: </label>
                <input type="number" name="plazo" id="plazo" required placeholder="dias">
            </section>
            <section class="" id="contenedor-interes-compuesto">
                <p>INTERES COMPUESTO</p>
                <section>
                    <label for="si">SI</label>
                    <input type="radio" name="interesCompuesto" id="si" value="si">
                </section>
                <section>
                    <label for="no">NO</label>
                    <input type="radio" id="no" name="interesCompuesto" value="no">
                </section>
                <section>
                    <label for="monto">MONTO: </label>
                    <input type="number" id="monto" name="monto" requierd placeholder="$1000000">
                </section>
            </section>
            <section>
                <input type="submit" value='SIMULAR'>
            </section>

        </form>
    </article>
</section>

<?php
    require_once('php/pie.php');
?>