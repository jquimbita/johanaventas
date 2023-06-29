<br>
<div class="row">
  <div class="col-md-12 text-center">
  <p>
    <font size=8 style = "font-family:Copperplate; background-color:Purple ; color:white" >NUEVO</font>
    <font size=8 style = "font-family:Copperplate; background-color:Purple; color:white" >PRODUCTO</font>
  </p>
  </div>
    </div>
    <div class="col-md-4 nuevo">
      <a href="<?php echo site_url('productos/nuevoPEDI') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Agregar Producto</a>
    </div>
  </div>
  <br>
<?php if ($productos): ?>
  <table class="table table-striped table-bordered table-hover" >
    <thead>
      <tr>
        <th>ID</th>
        <th>NOMBRES</th>
        <th>CANTIDAD</th>
        <th>CODIGO</th>
        <th>METODO DE PAGO</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productos as $filaTemporal): ?>
        <tr>
          <td>
            <?php echo $filaTemporal->id_pro; ?>
          </td>
          <td>
            <?php echo $filaTemporal->nombres_pro; ?>
          </td>
          <td>
            <?php echo $filaTemporal->cantidad_pro; ?>
          </td>
          <td>
            <?php echo $filaTemporal->codigo_pro; ?>
          </td>
          <td>
            <?php echo $filaTemporal->pago_pro; ?>
          </td>
          <td class="text-center">
            <a href="<?php echo site_url(); ?>/productos/editar<?php echo $filaTemporal->id_pro; ?>"title="Editar Producto" style="color:yellow;"</td>
            <i class="mdi mdi-pencil"></i>
            EDITAR
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
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h1>NO HAY DATOS</h1>
<?php endif; ?>
