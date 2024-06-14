<?php
  function conectarDB() : mysqli {
    $db = mysqli_connect('localhost','root', '', 'viajes');
    $db->set_charset('utf8');
    
    if(!$db) {
      echo "Error no se pudo conectar";
      exit;
    }

    // echo "Conexión establecida correctamente";

    $db->set_charset('utf8');
    return $db;
  }