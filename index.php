<?php
    require_once('php/encabezado.php');

?>
<section class="">
    <article>
        <form action="php/control.php" method="post">
            <legend>DATOS A SIMULAR</legend>
            <section>
                <label for="tna">TNA</label>
                <input type="number" id="tna" name="tna">
            </section>
            <section>
                <label for="plazo">PLAZO</label>
                <select name="plazo" id="plazo">
                    <option value="">------SELECCIONE------</option>
                    <option value="1">1 mes</option>
                    <option value="2">2 meses</option>
                    <option value="3">3 meses</option>
                    <option value="4">4 meses</option>
                    <option value="5">5 meses</option>
                    <option value="6">6 meses</option>
                    <option value="7">7 meses</option>
                    <option value="8">8 meses</option>
                    <option value="9">9 meses</option>
                    <option value="10">10 meses</option>
                    <option value="11">11 meses</option>
                    <option value="12">12 meses</option>
                </select>
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
                    <input type="number" id="monto" name="monto">
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