<?php

$anio = "1994";
$mes = "01";
$dia = "21";
//podemos dar un formato usando el siguiente codigo
$formato = "%s-%s-%s";
$valor_remplazado = sprintf($formato, $anio, $mes, $dia);
//aqui recibimos 3 parametros, el nuevo formato y los valores en el orden que queremos mostrar.
echo $valor_remplazado;

?>