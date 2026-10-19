<?php

$validaciones = [];

   function is_date($value) {
        $value = explode("/",$value);

        if (count($value) !== 3) return false;
          
        return @checkdate($value[1],$value[0],$value[2]);
    }
  

// verificar si POST esta definido
if (!empty($_POST)) {

 //echo "Estoy definido ";

 // validar que la variable exista y no este vacia
  if(empty($_POST['txtNombre'])) {
     $validaciones['nombre '] = 'El campo nombre es requerido ! ';
  }
  elseif (strlen($_POST['txtNombre']) < 3) {
     $validaciones['nombre '] = 'El campo nombre requiere minimo 3 caracteres ! ';
  }
   if(empty($_POST['txtCorreo'])) {
     $validaciones['correo'] = 'El campo correo es requerido ! ';
  }
  elseif (!filter_input(INPUT_POST,'txtCorreo',FILTER_VALIDATE_EMAIL)) {
    $validaciones['correo'] = 'El campo correo , requiere un correo valido ! ';
  }

  if (!empty($_POST['txtWeb'])) {
     if (!filter_input(INPUT_POST,'txtWeb',FILTER_VALIDATE_URL)) {
       $validaciones['web'] = 'El campo web requiere una direccion valida ';
     }
  }

  //dd/mm/año
  if (!empty($_POST['txtFecha'])) {
     if (!is_date($_POST['txtFecha'])) {
       $validaciones['fechaNac'] = 'El campo Fecha de Nacimiento requiere una fecha valida dd/mm/yyyy ';
     }
  }
    if(empty($_POST['txtAcepto'])) {
     $validaciones['acepto'] = 'Debe aceptar las condiciones ! ';
  }


   // var_dump($validaciones);

   echo json_encode([
    'response' => count($validaciones) === 0,
    'errors' => $validaciones
   ]);


}

  
?>