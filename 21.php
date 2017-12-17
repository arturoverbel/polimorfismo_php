<?php

$dato = '{"estado":"correcto","msg":"usuario creado correctamente","usuario":{"id":"11","nombre":"otroUsuario","email":"prueba@ejemplo.com"}}';

$dato = json_decode($dato);


echo "Nombre: " . $dato->usuario->nombre;

