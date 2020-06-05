
//Revisar este código que tiene varios errores y ajustar hasta que se obtenga un resultado

$cantidadZapatos = 5;
$costoneto = 150000
$totalCompra = ($cantidadZapatos *costoneto) ;

$valorPagar = ($cantidadZapatos * $costoneto)-$valordescuento;


if ( $cantidadZapatos == 3 ) {
  $valordescuento = $totalCompra * 0,10 ;
    
} else if ( $cantidadZapatos > 3 && $cantidadZapatos <= 5 ) {
  $valordescuento = $totalCompra * 0,20 ;
    
} else  if ( $cantidadZapatos > 5 ) {
  $valordescuento = $totalCompra * 0,40 ;
}
console.log ( "Cantidad Vendida:" . $cantidadZapatos .  "<br> Costo Neto:" . $totalCompra .
"<br>Valor del Descuento:" . $valordescuento . "<br> Valor a Pagar es:"+$valorPagar );

?>