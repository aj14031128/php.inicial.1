<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilo.css">
<title>Actividad</title>
</head>
<body>


<?php
$precio1=7500;
$precio2=20000;
$precio3=15500;
$productos=array('Panel Solar','Inversor','Baterías');
$dolar=204;
$precio1US=$precio1/$dolar;
$precio2US=$precio2/$dolar;
$precio3US=$precio3/$dolar;
//Precios con descuento
$descuento=0.15;
$preciodesc1=$precio1-($precio1*$descuento);
$preciodesc2=$precio2-($precio2*$descuento);
$preciodesc3=$precio3-($precio3*$descuento);

?>

<h1>Nuestros productos</h1>
<div class="Contenedor">

    <div class="Producto">
        <div class="Nombre"> <?php echo $productos[0]?> </div>
        <div class="Precio"> Precio: $<?php echo $precio1?> </div>
        <div class="PrecioUS"> Precio: US<?php echo round ($precio1US) ?> *</div>
    </div>

    <div class="Producto">
        <div class="Nombre"> <?php echo $productos[1]?> </div>
        <div class="Precio"> Precio: $<?php echo $precio2?> </div>
        <div class="PrecioUS"> Precio: US<?php echo round ($precio2US) ?> *</div>
    </div>

    <div class="Producto">
        <div class="Nombre"> <?php echo $productos[2]?> </div>
        <div class="Precio"> Precio: $<?php echo $precio3?> </div>
        <div class="PrecioUS"> Precio: US<?php echo round ($precio3US) ?> *</div>
    </div>
</div>

<h4>*El valor de referencia del dolar es: $<?php echo ($dolar) ?></h4>
<h4> Con la compra de los siguientes conjuntos, obtiene un 15% de descuento!</h4>
<ul>
<li><?php echo ($productos[0]." + ".$productos[1]." = $".($preciodesc1+$preciodesc2))  ?></li>
<li><?php echo ($productos[1]." + ".$productos[2]." = $".($preciodesc2+$preciodesc3))  ?></li>
<li><?php echo ($productos[0]." + ".$productos[1]." + ".$productos[2]." = $".($preciodesc1+$preciodesc2+$preciodesc3))  ?></li>
</ul>

</body>
</html>
