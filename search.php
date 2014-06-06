<?php

Include ("model.php");
?>

<a href="uploadImg.php">Subir</a> - <a href="viewImg.php">Ver</a> - <a href="search.php">Buscar</a> - <a href="login.php">Login</a>

<form action="" method="post"> 
    <div><label>Buscar</label><input name="search" type="text" ></div> 
    <div><input name="Buscar" type="submit" value="buscar"></div> 
</form> 
<?php


if (filter_has_var(INPUT_POST, "search")){

	$search = filter_input(INPUT_POST, "search");
	data_grid_search($search);

}
else{
	echo"Ingrese las palabras a buscar";

}

?>

