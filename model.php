<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost","root","") or die ("Error al conectar a la base de datos.");
mysql_select_db("webimage");
$destination_dir="uploads";


    function upload_image($name,$description,$tmp_name,$img_file ,$img_type){

        global $destination_dir;

        //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
        if ( is_dir($destination_dir) && is_uploaded_file($tmp_name)) 
        {        

            echo $img_file; 
            //¿es una imágen realmente?           
            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
                //¿Tenemos permisos para subir la imágen?
                //echo 2;
                if(move_uploaded_file($tmp_name, $destination_dir.'/'.$img_file)){    

                    
                    
                    $directorio = "uploads/".$img_file;

                    mysql_query("INSERT INTO imagenes (name,description,directory) VALUES ('$name','$description','$directorio')");
         
                    return true;
                    //echo $tmp_name;
                    //echo $img_file;
                }
            }
        }
        //si llegamos hasta aquí es que algo ha fallado
        return false; 
    }//end function


    function data_grid_search($search){

        $query = "Select name,description,directory from imagenes where name = '$search'";
        $result = mysql_query($query);
        $numero = 0;


        echo "<table border=\"1\" cellspacing=1 cellpadding=2 style=\"font-size: 8pt\">
        <tr>
        <td><font face=\"verdana\"><b>Name</b></font></td>
        <td><font face=\"verdana\"><b>Description</b></font></td>
        <td><font face=\"verdana\"><b>directory</b></font></td>
        <td><font face=\"verdana\"><b>Image</b></font></td>
        </tr>";
        while($row = mysql_fetch_array($result))
        {
            echo "<tr><td width=\"25%\"><font face=\"verdana\">" . $row["name"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"verdana\">" . $row["description"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"verdana\">" . $row["directory"] . "</font></td>";  
            echo "<td width=\"20%\"><font face=\"verdana\"><img src=\"" . $row["directory"] . "\" style=\"max-width: 100px;\"/></font></td></tr>";  
            $numero++;
        }
        echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Number results: " . $numero . 
        "</b></font></td></tr>";


    }


    function data_grid_view(){

 


        $query = "Select name,description,directory from imagenes";
        $result = mysql_query($query);
        $numero = 0;


        echo "<table border=\"1\" cellspacing=1 cellpadding=2 style=\"font-size: 8pt\">
        <tr>
        <td><font face=\"verdana\"><b>Name</b></font></td>
        <td><font face=\"verdana\"><b>Description</b></font></td>
        <td><font face=\"verdana\"><b>directory</b></font></td>
        <td><font face=\"verdana\"><b>Image</b></font></td>
        </tr>";
        while($row = mysql_fetch_array($result))
        {
            echo "<tr><td width=\"25%\"><font face=\"verdana\">" . $row["name"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"verdana\">" . $row["description"] . "</font></td>";
            echo "<td width=\"25%\"><font face=\"verdana\">" . $row["directory"] . "</font></td>";  
            echo "<td width=\"20%\"><font face=\"verdana\"><img src=\"" . $row["directory"] . "\" style=\"max-width: 100px;\"/></font></td></tr>";  
            $numero++;
        }
        echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Number results: " . $numero . 
        "</b></font></td></tr>";

    }


?>