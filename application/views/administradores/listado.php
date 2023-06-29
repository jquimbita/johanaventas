<div class="row">
    <div class="col-md-8">
    <h1>LISTADO DE PEDIDOS</h1>
    </div>
    <div class="col-md-4">
      <br>
      <br>
      <a href="<?php echo site_url('administradores/nuevo'); ?>"class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>Agregar Administrador</a>
    </div>
</div>
<br>
<?php if ($administradores): ?>
    <table class="table table-striped  table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>CEDULA</th>
          <th>PRIMER APELLIDO</th>
          <th>SEGUNDO APELLIDO</th>
          <th>NOMBRES</th>
          <th>DIRECCION</th>
          <th>LATITUD</th>
          <th>LONGITUD</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <!-- sentecias selectivas
      ->if
      -> switch / clase
      sentencias repetetiva/iterativa
      -> for incio, condicion,incre
      -> while condicion
      -> do while
      -> foreach -->
      <tbody>
         <?php foreach ($administradores as $filaTemporal): ?>
           <tr>
              <td><?php echo $filaTemporal->id_adm; ?></td>
              <td><?php echo $filaTemporal->cedula_adm; ?></td>
              <td><?php echo $filaTemporal->primer_apellido_adm; ?></td>
              <td><?php echo $filaTemporal->segundo_apellido_adm; ?></td>
              <td><?php echo $filaTemporal->nombres_adm; ?></td>
              <td><?php echo $filaTemporal->direccion_adm; ?></td>
              <td><?php echo $filaTemporal->latitud_adm; ?></td>
              <td><?php echo $filaTemporal->longitud_adm; ?></td>
              <!-- ico editar
              el foreach es que se va a repetir el numero de veces
               table-hove para que se active cuando pase el maus
                 &nbsp; es para espacios-->
              <td class="text-center">
                  <a href="<?php echo site_url(); ?>/administradores/editar/<?php echo $filaTemporal->id_adm;?>" title="Editar Administrador"><i class="mdi mdi-pencil"> </i>Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <td class="text-center">
                    <?php if ($this->session->
                          userdata("conectado")->perfil_usu=="ADMINISTRADOR"): ?>
                            <a href="<?php echo site_url(); ?>/productos/eliminar/<?php echo $filaTemporal->id_pro; ?>"
                            title="Eliminar Producto"
                            onclick="return confirm('¿Esta seguro?');"
                            style="color:red;">
                              <i class="mdi mdi-close"></i>
                              Eliminar
                            </a>
                          <?php endif; ?>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay pedidos</h1>
    <?php endif; ?>
