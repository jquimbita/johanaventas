<div class="row">
  <div class="col-md-12 text-center">
    <p><font size=7 style = "font-family:; background-color:#inherit;; color:Green">NUEVO PRODUCTO</font></p>
  </div>
</div>
<form  class="" id="frm_nuevo_producto" action="<?php echo site_url(); ?>/productos/guardar" method="post" style="background-color:#D69AF9; ">
    <div class="row" >
        <div class="col-4 text-center">
              <label for="">Nombres del producto:</label>
              <br>
              <input type="text"
              placeholder="Ingrese el nombre del pruducto"
              class="form-control"
              name="nombres_pro" value=""
              id="nombres_pro" >
          </div>
          <div class="col-md-4 text-center">
            <label for="">Cantidad</label>
            <br>
            <input type="number"
            placeholder="Ingrese la cantidad del producto"
            class="form-control"
            name="cantidad_pro" value=""
            id="cantidad_pro" >
          </div>
        </div>
    <br>
        <div class="row">
          <div class="col-md-4 text-center">
              <label for="">Codigo del producto</label>
              <br>
              <input type="number"
              placeholder="Ingrese el codigo"
              class="form-control"
              name="codigo_pro" value=""
              id="codigo_pro" >
            </div>
            <div class="col-md-4 text-center">
              <label for="">METODO DE PAGO:</label>
              <br>
              <select class="form-select" aria-label="Default select example"
              class="form-control"
              name="pago_pro" value=""
              id="pago_pro">
            <option selected>Seleccione</option>
            <option value="TRANSFERENCIA">TRANSFERENCIA</option>
            <option value="DEPOSITO">DEPOSITO</option>
          </select>
        </div>
        </div>
          </div>
          <br>
          <div class="row">
        <div class="col-md-8 text-center">
          <div class="col-md-4 text-center">
              <button type="submit" name="button"
              class="btn btn-primary">
                Guardar
              </button>
              &nbsp;
              <a href="<?php echo site_url('productos/indexPEDI'); ?>"
                class="btn btn-danger">
                Cancelar
              </a>
      </div>
  </div>
</form>
<script type="text/javascript">
$("#frm_nuevo_producto").validate({
rules:{
  nombres_pro:{
    required:true,
    minlength:2,
    maxlength:100,
    letras:true
  },
  // cantidad_pro:{
  //   required:true,
  //   minlength:4,
  //   maxlength:250,
  //   letras:true
  },
  // codigo_pro:{
  //   required:true,
  //   minlength:4,
  //   maxlength:250,
  //   letras:true
  },
  pago_pro:{
    required:true,
    minlength:4,
    maxlength:250,
    letras:true
  }
},
messages:{
nombres_pro:{
  required:"Por favor ingrese un nombre del producto",
  minlength:"nombre incorrecto, ingrese más de 5 dígitos",
  maxlength:"nombre incorrecto, ingrese menos de 100 dígitos"
  },
cantidad_pro:{
  required:"Por favor ingrese la cantidad del producto",
  minlength:"Marca incorrecta, ingrese más de 1 dígitos"
},
codigo_pro:{
  required:"Por favor ingrese la fecha correspondiente",
  minlength:"Marca incorrecta, ingrese más de 4 dígitos",
  maxlength:"Marca incorrecta, ingrese menos de 100 dígitos"
},
pago_pro:{
  required:"Por favor ingrese el metodo de pago",
  minlength:"Color incorrecto, ingrese más de 2 dígitos",
  maxlength:"Color incorrecto, ingrese menos de 100 dígitos"
}
}
});
</script>
