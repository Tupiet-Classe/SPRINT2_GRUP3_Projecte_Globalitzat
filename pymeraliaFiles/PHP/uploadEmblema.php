<?php

if(isset($_FILES['image'])){

    $file = $_FILES['image'];
    $filename = $file['name'];
    $file_type = $file['type'];
    $file_size = $file['size'];

    // Validació per a que sigui una imatge amb uns formats concrets
    $allowed_types = array("image/jpg" , "image/jpeg" , "image/png");
    
    if(!in_array($file_type, $allowed_types)){
    header("location:../admin/emblemasAdmin.php");
    }

    // Crear directori images/emblemas
    if(!is_dir("../images/emblemas")){
        mkdir("../images/emblemas", 0777);
    }

    // Moure arxiu a directori image/emblemas
    move_uploaded_file($file['tmp_name'], '../images/emblemas/'.$filename);

} else {
    header("location:emblemasAdmin.php");
}

?>