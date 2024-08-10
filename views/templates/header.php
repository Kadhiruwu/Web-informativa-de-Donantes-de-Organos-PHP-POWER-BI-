
<div class="contenedor_principal">
    <nav class="nav_principal">
        <div class="solo">
            <a href="/">Sbpdoep</a>
        </div>
        <div class="nav_secundario">

            <!-- <a href="/user/dashboard1">Dashboard 1</a>
            <a href="/user/dashboard2">Dashboard 2</a>
            <a href="/user/dashboard3">Dashboard 3</a>
            <a href="/user/dashboard4">Dashboard 4</a> -->
            <?php
            // Obtener el valor seleccionado de la URL si existe
            $selected = isset($_GET['selected']) ? $_GET['selected'] : '';
            ?>
           
            <select class="opciones" onchange="handleSelectChange(event)">
                <option class="opprimero" disabled selected value="" <?php echo empty($selected) ? 'selected' : ''; ?>>Seleccione un Dashboard</option>
                <option class="opprimero" value="dashboard1" <?php echo $selected == 'dashboard1' ? 'selected' : ''; ?>>Enero - Marzo</option>
                <option class="opprimero" value="dashboard2" <?php echo $selected == 'dashboard2' ? 'selected' : ''; ?>>Abril - Junio</option>
                <option class="opprimero" value="dashboard3" <?php echo $selected == 'dashboard3' ? 'selected' : ''; ?>>Julio - Setiembre</option>
                <option class="opprimero" value="dashboard4" <?php echo $selected == 'dashboard4' ? 'selected' : ''; ?>>Octubre - Diciembre</option>
                <option class="opprimero" value="dataColombia" <?php echo $selected == 'dataColombia' ? 'selected' : ''; ?>>Data Colombia</option>
            </select>
            <a href="/user/contactanos" id="ingresar">Contáctanos</a>
            <?php if ($authh) : ?>
                <a href="/CerrarSesion">Cerrar Sesión</a>
            <?php endif; ?>
        </div>
    </nav>
    <h2> <?php echo $titulo; ?></h2>
    <p class="nombreP"><?php echo "Hola: " . $_SESSION['user']; ?></p>
</div>

<script src="/build/js/opciones.js"></script>
