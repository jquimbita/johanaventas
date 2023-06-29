<h1>EDITAR CLIENTE</h1>
<form class="" id="frm_editar_cliente" action="<?php echo site_url(); ?>/clientes/procesarActualizacion" method="post">
    <div class="row">
      <input type="hidden" name="id_cli" id="id_cli" value="<?php echo $clienteEditar->id_cli; ?>">
      <div class="row">
        <div class="col-md-4">
            <label for="">Cédula:
              <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="number"
            placeholder="Ingrese la cédula"
            class="form-control"
            required
            name="cedula_cli" value=""
            id="cedula_cli">
        </div>
        <div class="col-md-4">
            <label for="">Apellidos:
              <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="text"
            placeholder="Ingrese los apellidos"
            class="form-control"
            required
            name="apellidos_cli" value=""
            id="apellidos_cli">
        </div>
        <div class="col-md-4">
          <label for="">Nombres:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          name="nombres_cli" value=""
          id="nombres_cli">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
            <label for="">Telefono:
            <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="number"
            placeholder="Ingrese el telefono"
            class="form-control"
            required
            name="telefono_cli" value=""
            id="telefono_cli">
        </div>
        <div class="col-md-4">
            <label for="">Correo:
              <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="text"
            placeholder="Ingrese el correo"
            class="form-control"
            required
            name="correo_cli" value=""
            id="correo_cli">
        </div>
        <div class="col-md-4">
          <label for="">Latitud:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese la latitud"
          class="form-control"
          required
          name="latitud_cli" value=""
          id="latitud_cli">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
            <label for="">Longitud:
              <span class="obligatorio">(Obligatorio)</span>
            </label>
            <br>
            <input type="text"
            placeholder="Ingrese la Longitud"
            class="form-control"
            required
            name="longitud_cli" value=""
            id="longitud_cli">
        </div>
      </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              editar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/clientes/indexC"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_editar_cliente").validate({
    rules:{
      cedula_cli:{
        required:true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      apellidos_cli:{
        required:true,
        minlength:3,
        maxlength:150,
        letras:true
      },
      nombres_cli:{
        required:true,
        minlength:3,
        maxlength:150
      },
      telefono_ins:{
        required:true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      correro_cli:{
        required:true,
        minlength:3,
        maxlength:150
      }
    },
    messages:{
      cedula_cli:{
        required:"Por favor Ingrese el numero de cedula",
        minlength:"Cedula incorrecta, ingrese 10 digitos",
        maxlength:"Cedula incorrecta, ingrese 10 digitos",
        digits:"Este campo solo acepta números",
        number:"Este campo solo acepta números"
      },
      apellidos_cli:{
        required:"Por favor ingrese los apellidos",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"Apellidos incorrectos ",
      },
      nombres_cli:{
        required:"Por favor ingrese los nombres",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"Nombres incorrectos"
      },
      telefono_ins:{
        required:"Por favor Ingrese el numero de télefono",
        minlength:"Telefono incorrecto, ingrese 10 digitos",
        maxlength:"Telefono incorrecto, ingrese 10 digitos",
        digits:"Este campo solo acepta números",
        number:"Este campo solo acepta números"
      },
      correro_cli:{
        required:"Por favor ingrese el correro del cliente",
        minlength:"El titulo debe tener al menos 3 caracteres",
        maxlength:"Apellido incorrecto"
      },
    }
  });
</script>
