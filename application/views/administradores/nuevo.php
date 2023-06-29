<h1>NUEVO PEDIDO</h1>
<form class=""
id="frm_nuevo_administrador"
action="<?php echo site_url(); ?>/administradores/guardar"
method="post">
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
          name="cedula_adm" value=""
          id="cedula_adm">
      </div>
      <div class="col-md-4">
          <label for="">Primer Apellido:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          required
          name="primer_apellido_adm" value=""
          id="primer_apellido_adm">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_adm" value=""
        id="segundo_apellido_adm">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombres:
          <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          required
          name="nombres_adm" value=""
          id="nombre_adm">
      </div>
      <div class="col-md-4">
          <label for="">Dirección
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          required
          name="direccion_adm" value=""
          id="direccion_adm">
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
        name="latitud_adm" value=""
        id="latitud_adm">
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-12">
          <label for="">Longitud:
            <span class="obligatorio">(Obligatorio)</span>
          </label>
          <br>
          <input type="text"
          placeholder="Ingrese la Longitud"
          class="form-control"
          required
          name="longitud_adm" value=""
          id="longitud_adm">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="mapaUbicacion" style="height:300px; width:100%; border:2px solid black;">
          </div>
      </div>
    </div>
    <br>
<div class="row">
    <div class="col-md-12 text-center">
        <button type="submit" name="button"
        class="btn btn-primary">
          Guardar
        </button>
        &nbsp;
        <a href="<?php echo site_url(); ?>/administradores/listado"
          class="btn btn-danger">
          Cancelar
        </a>
    </div>
</div>
</form>

  <!-- imporytacion de mapaCliente -->
  <script type="text/javascript">
function initMap(){
    var centro=new google.maps.LatLng(-1.6192424073977898,-78.59470903782957);
    var mapa1=new google.maps.Map(document.getElementById('mapaUbicacion'),
  {
    center:centro,
    zoom:7,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  }
  );
var marcador=new google.maps.Marker({
  position:centro,
  map:mapa1,
  title:"Seleccione la direccion",
//icon:"ruta",
  draggable:true
  });
  google.maps.event.addListener(marcador,'dragend',function(){
  //alert("Se termino el Drag");
  document.getElementById('latitud_adm').value=this.getPosition().lat();
  document.getElementById('longitud_adm').value=  this.getPosition().lng();
  });
  }//cierre de la funcion initMap
</script>

</form>
