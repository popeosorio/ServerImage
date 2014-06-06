<?php

Include ("model.php");

?>
<a href="uploadImg.php">Subir</a> - <a href="viewImg.php">Ver</a> - <a href="search.php">Buscar</a>
<?php

$name = $_POST["name"];
$description = $_POST["description"];


$imgName = $_FILES['uploadImage']['name'];
$imgType = $_FILES['uploadImage']['type'];
$imgSize = $_FILES['uploadImage']['size'];
$tmp_name = $_FILES['uploadImage']['tmp_name'];


upload_image($name,$description,$tmp_name,$imgName,$imgType);


?>

