

<?php

session_start();
if(isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee 
{ 
?>


<a href="uploadImg.php">Subir</a> - <a href="viewImg.php">Ver</a> - <a href="search.php">Buscar</a> - <a href="logout.php">Logout</a>
<form action="processing.php" id="form1" enctype="multipart/form-data" method="post">
	<label>
		Name: <input type="text" name="name" maxlength="100">
	</label>

	<br><br>

	<label>
  		Image: <input id="uploadImage" name="uploadImage" type="file" />
  	</label>

  	<br><br>

 	 <label>
  		Description: <textarea id="description" name="description" cols="25" rows="5">Enter your comments here...</textarea>
 	</label>

	<br><br>

	<input id="enviar" name="enviar" type="submit" value="Enviar" />

</form>
<?php
}
else
{
?>
	<a href="uploadImg.php">Subir</a> - <a href="viewImg.php">Ver</a> - <a href="search.php">Buscar</a> - <a href="login.php">Login</a>
	<br>
	Sesion no iniciada!
<?php
}
?>