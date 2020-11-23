<?php
$nro=19;
$cont=0;
for ($i=1; $i <= $nro; $i++) { 
    if($nro % $i == 0){
        $cont++;
    }
}
if($cont <= 2){
    echo"El numero ".$nro." es primo ";
}
else {
    echo"El numero ".$nro." no es primo ";
}