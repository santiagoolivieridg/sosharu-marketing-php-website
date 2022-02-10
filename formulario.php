<section class="contacto">
  <h2 class="montserrat subtitulo35"><?php echo $lang['contactanos']?></h2>
  <div class="decoracion margin-auto"></div>
  <div class="form">
    <form action="gracias.php" method="post" id="Formulario">

    <div class="form1">
        <div class="form_nombre">
          <label for="Nombre" class="roboto parrafo15"><?php echo $lang['nombre']?></label>
          <br>
          <input type="text" id="Nombre" name="Nombre" placeholder="<?php echo $lang['tunombre']?> (*)" required>
        </div>

        <div class="form_email">
          <label for="Email" class="roboto parrafo15"><?php echo $lang['email']?></label>
          <br>
          <input type="email" id="Email" name="Email" placeholder="<?php echo $lang['tuemail']?> (*)" required>
        </div>

        <div class="form_servicios">
          <label for="Servicio" class="roboto parrafo15"><?php echo $lang['elegir_servicio']?></label>
          <br>
          <select name="Servicio" id="Servicio" class="roboto parrafo15">
            <option value="Consulta"><?php echo $lang['consulta']?></option>
            <option value="Traducciones"><?php echo $lang['servicio_traducciones']?></option>
            <option value="Publicidad en Internet"><?php echo $lang['servicio_publicidad']?></option>
            <option value="Gestión de Redes Sociales"><?php echo $lang['servicio_redes']?></option>
            <option value="Desarrollo y Posicionamiento Web"><?php echo $lang['servicio_desarrolloweb']?></option>
            <option value="Redacción"><?php echo $lang['servicio_redaccion']?></option>
          </select>
        </div>
    </div>

      <div class="form_mensaje">
        <label for="Mensaje" class="roboto parrafo15"><?php echo $lang['tuproyecto']?>:</label>
        <br>
        <textarea placeholder="<?php echo $lang['tumensaje']?> (*)" name="Mensaje" id="Mensaje" cols="30" rows="10" class="roboto" required></textarea>
      </div>

      <button id="Submit" type="submit" form="Formulario" name="submit" class="roboto btn-clear btn-red"><?php echo $lang['submit']?></button>
    </form>
  </div>
</section>