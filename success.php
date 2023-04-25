// Obtener los datos de la transacción aprobada
$estado = "aprobado";
$mensaje = "La transacción se ha aprobado correctamente";
$oid = $array_transaccion_aprobada['oid'];
$total = $array_transaccion_aprobada['chargetotal'];

// Crear la URL de respuesta
$url_respuesta = "https://ejemplo.com/pasarela_respuesta?estado={$estado}&mensaje={$mensaje}&oid={$oid}&total={$total}";
