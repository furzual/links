// Obtener los datos de la transacción denegada
$estado = "denegado";
$mensaje = "La transacción ha sido denegada";
$oid = $array_transaccion_denegada['oid'];
$total = $array_transaccion_denegada['chargetotal'];

// Crear la URL de respuesta
$url_respuesta = "https://ejemplo.com/pasarela_respuesta?estado={$estado}&mensaje={$mensaje}&oid={$oid}&total={$total}";
