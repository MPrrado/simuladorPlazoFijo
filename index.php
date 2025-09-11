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
                <section id="cotenedor-meses">
                    <label for="meses">CANTIDAD DE MESES:</label>
                    <select name="meses" id="">
                        <option value="">--------SELECCIONE--------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

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