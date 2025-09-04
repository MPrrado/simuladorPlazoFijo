<?php
    require_once('php/encabezado.php');

?>
<section>
    <article>
        <form action="control.php">
            <legend>DATOS A SIMULAR</legend>
            <section>
                <label for="tna">TNA</label>
                <input type="number" id="tna" name="tna">
            </section>
            <section>
                <label for="plazo">PLAZO</label>
                <select name="plazo" id="plazo">
                    <option value="1">1 mes</option>
                    <option value="2">2 mes</option>
                    <option value="3">3 mes</option>
                    <option value="4">4 mes</option>
                    <option value="5">5 mes</option>
                    <option value="6">6 mes</option>
                    <option value="7">7 mes</option>
                    <option value="8">8 mes</option>
                    <option value="9">9 mes</option>
                    <option value="10">10 mes</option>
                    <option value="11">11 mes</option>
                    <option value="12">12 mes</option>
                </select>
            </section>
            <section>
                <label for=""></label>
                <input type="text">
            </section>


        </form>
    </article>
</section>

<?php
    require_once('php/pie.php');
?>