<h1>LOGIN</h1>
<form class=""
action="<?php echo site_url('welcome/iniciarSesion'); ?>"
method="post">
  <b>Email: </b>
  <input type="email" name="email_usu" value="" required>
  <br>
  <b>Contraseña:</b>
  <input type="password" name="password_usu" value="" required>
  <button type="submit" name="button">
	Ingresar
  </button>
</form>
