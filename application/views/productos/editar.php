<h1>EDITAR PRODUCTO</h1>
<form class="frm-editar-producto" id="frm_editar_producto" action="<?php echo site_url(); ?>/productos/procesarActualizacion" method="post">
    <div class="row">
      <input type="hidden" name="id_pro" id="id_pro" value="<?php echo $ProductoEditar->id_pro; ?>">
      <div class="row">
        <div class="col-md-4">
            <label for="nombres_pro">Nombres:
              <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="text"
            placeholder="Ingrese los nombres"
            class="form-control"
            required
            name="nombres_pro" value=""
            id="nombres_pro">
        </div>
        <div class="col-md-4">
            <label for="cantidad_pro">Cantidad:
              <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="text"
            placeholder="Ingrese la cantidad del producto"
            class="form-control"
            required
            name="cantidad_pro" value=""
            id="cantidad_pro">
        </div>
        <div class="col-md-4">
          <label for="codigo_pro">Codigo:</label>
          <br>
          <input type="number"
          placeholder="Ingrese el codigo del producto"
          class="form-control"
          name="codigo_pro" value=""
          id="codigo_pro">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
            <label for="pago_pro">Metodo de pago:
            <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="number"
            placeholder="Ingrese el metodo de pago"
            class="form-control"
            required
            name="pago_pro" value=""
            id="pago_pro">
        </div>
      </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              editar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/productos/indexPEDI"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_editar_producto").validate({
    rules:{
      nombres_pro:{
        required:true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      cantidad_pro:{
        required:true,
        minlength:3,
        maxlength:150,
      },
      codigo_pro:{
        required:true,
        minlength:10,
        maxlength:10,
      },
      pago_pro:{
        required:true,
        minlength:10,
        maxlength:10,
        digits:true
      }
    },
    messages:{
      nombres_pro:{
        required:"Por favor Ingrese el nombre del producto",
        minlength:"Nombres incorrectos, ingrese 10 dígitos",
      },
      cantidad_pro:{
        required:"Por favor ingrese la cantidad del producto",
        minlength:"La cantidad debe tener al menos 3 caracteres",
        maxlength:"La cantidad es incorrecta",
        digits:"Este campo solo acepta números",
        number:"Este campo solo acepta números"
      },
      codigo_pro:{
        required:"Por favor ingrese el código",
        minlength:"Código incorrecto, ingrese 10 dígitos",
        maxlength:"Código incorrecto, ingrese 10 dígitos",
        digits:"Este campo solo acepta números",
        number:"Este campo solo acepta números"
      },
      pago_pro:{
        required:"Por favor ingrese el método de pago",
        minlength:"El pago debe tener al menos 10 caracteres",
        maxlength:"El pago debe tener máximo 10 caracteres"
      },
    }
  });
</script>
