<div class="row">
  <div class="col-md-6 text-center">
    <br>
    <p><font size=7 style = "font-family:; background-color:#inherit;; color:Green">NUEVO CLIENTE</font></p>
  </div>
</div>
<form  class="" id="frm_nuevo_cliente" action="<?php echo site_url(); ?>/clientes/guardar" method="post" style="background-color:#D69AF9 ; ">
    <div class="row" >
      <div class="col-4 text-center">
            <label for="">Cedula:</label>
            <br>
            <input type="number"
            placeholder="Ingrese el numero de cedula"
            class="form-control"
            name="cedula_cli" value=""
            id="cedula_cli" required>
        </div>
        <div class="col-md-4 text-center">
          <label for="">Apellidos</label>
          <br>
          <input type="text"
          placeholder="Ingrese los apellidos"
          class="form-control"
          name="apellidos_cli" value=""
          id="apellidos_cli" required>
        </div>
        <div class="col-4 text-center">
              <label for="">Nombres:</label>
              <br>
              <input type="text"
              placeholder="Ingrese los nombres"
              class="form-control"
              name="nombre_cli" value=""
              id="nombre_cli" required>
          </div>
        </div>
    <br>
        <div class="row">
          <div class="col-md-4 text-center">
              <label for="">Correo</label>
              <br>
              <input type="text"
              placeholder="Ingrese el correo del cliente"
              class="form-control"
              name="correo_cli" value=""
              id="correo_cli" required>
            </div>
                <div class="col-md-4 text-center">
                    <label for="">Telefono</label>
                    <br>
                    <input type="number"
                    placeholder="Ingrese el telefono del cliente"
                    class="form-control"
                    name="telefono_cli" value=""
                    id="telefono_cli" required>
                  </div>
                </div>
        <br>
        <!-- <div class="row">
          <div class="col-md-2 text-center">
              <label for="">Latitud</label>
              <br>
              <input type="text"
              placeholder="Ingrese la latitud"
              required
              name="latitud_cli" value=""
              id="latitud_cli"
          </div>
          <div class="col-md-2 text-center">
            <label for="">Longitud</label>
            <br>
            <input type="text"
            placeholder="Ingrese la longitud"
            required
            name="longitud_cli" value=""
            id="longitud_cli"
          </div>
          </div> -->
          <br>
          <div class="row">
        <div class="col-md-8 text-center">
            <div id="mapaUbicacion" style="height:250px; width:100%; border:2px solid black;"></div>
        </div>
      <script type="text/javascript">
        function initMap(){
          var centro=
          new google.maps.LatLng(-1.596613, -78.351056);
          var mapa1=new google.maps.Map(
            document.getElementById('mapaUbicacion'),
            {
              center:centro,
              zoom:7,
              mapTypeId:google.maps.MapTypeId.G_DEFAULT_MAP_TYPES
            }
          );
          var marcador=new google.maps.Marker({
            position:centro,
            map:mapa1,
            title:"seleccione la dirección",
            icon:"<?php echo base_url(); ?>/assets/imagen/u1.png",
            draggable:true
          });
          google.maps.event.addDomListener(marcador,'dragend', function(event){
            // alert("se termino el Drag");
              document.getElementById('latitud_cli').value=
              this.getPosition().lat();
              document.getElementById('longitud_cli').value=
              this.getPosition().lng();
          });
        } //cierre de la funcion initMap
      </script>
          <div class="col-md-4 text-center">
              <button type="submit" name="button"
              class="btn btn-primary">
                Guardar
              </button>
              &nbsp;
              <a href="<?php echo site_url('clientes/indexC'); ?>"
                class="btn btn-danger">
                Cancelar
              </a>
      </div>
  </div>
</form>
<script type="text/javascript">
$("#frm_nuevo_cliente").validate({
rules:{
  cedula_cli:{
    required:true,
    minlength:3,
    maxlength:50,
    digits:true
  },
  apellidos_cli:{
    required:true,
    minlength:4,
    maxlength:50,
    letras:true
  },
  nombres_cli:{
    required:true,
    minlength:2,
    maxlength:50,
    letras:true
  },
  // correo_cli:{
  //   required:true,
  //   minlength:2,
  //   maxlength:10,
  //   letras:true
  // },
  telefono_cli:{
    required:true,
    minlength:9,
    maxlength:11,
    digits:true
  }

},
messages:{
  cedula_cli:{
    required:"Por favor ingrese un numero de cedula valida",
    minlength:"Cedula incorrecta, ingrese 10 dígitos",
    maxlength:"Cedula incorrecta, ingrese 20 dígitos",
    digits:"Este campo solo acepta números",
    number:"Este campo solo acepta números"
  },
nombres_cli:{
  required:"Por favor ingrese los nombres",
  minlength:"nombres incorrectos, ingrese más de 2 dígitos",
  maxlength:"nombres incorrectos, ingrese menos de 50 dígitos"
  },
apellidos_cli:{
  required:"Por favor ingrese los apellidos",
  minlength:"Apellidos incorrecta, ingrese más de 4 dígitos",
  maxlength:"Apellidos incorrecta, ingrese menos de 50 dígitos"
},
correo_cli:{
  required:"Por favor ingrese un correo existente",
  minlength:"Correo incorrecto, ingrese más de 4 dígitos",
  maxlength:"Correo incorrecto, ingrese menos de 50 dígitos"
},
telefono_cli:{
  required:"Por favor ingrese el telefono",
  minlength:"telefono incorrecta, ingrese 10 dígitos",
  maxlength:"telefono incorrecta, ingrese 20 dígitos",
  digits:"Este campo solo acepta números",
  number:"Este campo solo acepta números"
}
}
});
</script>
