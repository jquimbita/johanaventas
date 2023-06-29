<div class="row">
  <div class="col-md-12 text-center">
  <p>
    <font size=8 style = "font-family:Copperplate; background-color:purple; color:white" >NUEVO</font>
    <font size=8 style = "font-family:Copperplate; background-color:purple; color:white" >CLIENTE</font>
  </p>
  </div>
    </div>
    <div class="col-md-4 nuevo">
      <a href="<?php echo site_url('clientes/nuevoC') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Agregar Cliente</a>
    </div>
  </div>
  <br>
<?php if ($clientes): ?>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>CEDULA</th>
        <th>APELLIDOS</th>
        <th>NOMBRES</th>
        <th>TELEFONO</th>
        <th>CORREO</th>
        <th>LATITUD</th>
        <th>LONGITUD</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($clientes as $filaTemporal): ?>
        <tr>
          <td>
            <?php echo $filaTemporal->id_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->cedula_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->apellidos_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->nombres_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->telefono_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->correo_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->latitud_cli; ?>
          </td>
          <td>
            <?php echo $filaTemporal->longitud_cli; ?>
          </td>
          <td class="text-center">
              <a href="<?php echo site_url(); ?>/clientes/editar/<?php echo $filaTemporal->id_cli;?>" title="Editar Cliente"><i class="mdi mdi-pencil"> </i>Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php if ($this->session->
                                userdata("conectado")->perfil_usu=="ADMINISTRADOR"): ?>
                                  <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id_cli; ?>"
                                  title="Eliminar Cliente"
                                  onclick="return confirm('¿Esta seguro?');"
                                  style="color:red;">
                                    <i class="mdi mdi-close"></i>
                                    Eliminar
                                  </a>
                                <?php endif; ?>
                              </td>
                            </a>
                          </td>
                        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<?php else: ?>
  <h1>NO HAY CLIENTES</h1>
<?php endif;?>
