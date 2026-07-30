<?php


// //informacion personal

// $nombre = " Juan \n";
// $edad = " 41 \n";
// $ciudad = " Risvera \n";

// echo " nombre" . $nombre; 
// echo " edad" . $edad;
// echo " ciudad" . $ciudad;

// //informacion de un producto

// $nomproducto = " FANTA \n"; 
// $precio = " 50 \n"; 
// $cantidadisponible = " 30\n"; 

// echo "Nombre de producto" . $nomproducto; 
// echo "El precio es" . $precio; 
// echo "la cantidad diponible es" . $cantidadisponible; 

// //informacion de un juego  

// $nombredeljugador = " Fernan \n";
// $nombrepersonaje = " SonGOKU \n";
// $nivel = " 💪: 5000 \n";
// $servidor = " 🌍: LATAM \n";

// echo "Nombre del jugador" . $nombredeljugador;
// echo "Nobre del personaje" . $nombrepersonaje;
// echo "Nivel" . $nivel;
// echo "Server" . $servidor; 

// //informacion personal

// $nombre = "Lucía \n";
// $curso = "Tercero \n";
// $materia = "Programación \n";

// echo "Nombre: " . $nombre;
// echo "Curso: " . $curso;
// echo "Materia: " . $materia;


// //operaciones matematicas

// $numero1 = " 12 \n";
// $numero2 = " 21 \n";

// $Multiplicacion = $numero1 * $numero2;
// $suma = $numero1 + $numero2;
// $resta = $numero1 - $numero2;
// $division = $numero1 / $numero2; 

// echo "mutiplicacion" . $Multiplicacion . "\n";
// echo "suma" . $suma. "\n"; 
// echo "resta" . $resta . "\n";
// echo "division" . $division . "\n";


// //calculo de area de un rectangulo

// $base = " 20 \n";
// $altura = " 5 \n";

// $area = $base * $altura; 

// echo "area" . $area . "\n";

// $Nota1 = "8";
// $Nota2 = "7";
// $Nota3 = "9";
// $Promedio =(($Nota1 + $Nota2 + $Nota3)/ 3 );

// echo "promedio" . $Promedio ."\n";


// //conversion de minutos a horas y minutos
// $minutosTotales = 135;
// $horas = (int)($minutosTotales / 60);
// $minutos = $minutosTotales % 60;

// echo $minutosTotales . " minutos en total " ."\n";
// echo $horas . " horas  " ."\n";
// echo $minutos . " minutos" . "\n";


// //numero mayor y menor

// $numero1 = 10;
// $numero2 = 5;

// if ($numero1 == $numero2) {
//     echo "Los números son iguales\n";
// } elseif ($numero1 > $numero2) {
//     echo "El primer número es mayor\n";
// } else {
//     echo "El segundo número es mayor\n";
// }


// //edad mayor o menor


// $edad = 18;

// if ($edad >= 18) {
//     echo "Eres mayor de edad\n";
// } else {
//     echo "Eres menor de edad\n";
// }

// echo "Edad: " . $edad . "\n";


// // texto numero

// $numero = 10;
// $Texto = "10";

// if ($numero == $Texto) {
//     echo "El número y el texto son iguales\n";

// } elseif ($numero === $Texto) {
//     echo "El número y el texto son idénticos\n";
// }





// //stock y presupuesto

// $stockDisponible = 10;
// $cantidadSolicitada = 3;
// $precio = 100;
// $presCliente = 500;

// $precioTotal = $cantidadSolicitada * $precio;

// if ($stockDisponible >= $cantidadSolicitada) {
//     echo "Hay stock suficiente \n";

//     if ($presCliente >= $precioTotal) {
//         echo "Presupesto suficiente \n";
//         echo "Compra realizada \n";
//     } else {
//         echo "insuficiente presupuesto \n";
//     }

// } else {
//     echo "No hay stock \n";
// }

// //puntos de juego

// $puntos = 50;

// if ($puntos >= 50) {
//     echo "Gano\n";
// } else {
//     echo "Perdio\n";
// }

// // Positivo, negativo o cero

// $numero = -5;

// if ($numero > 0) {
//     echo "Positivo\n";
// } elseif ($numero < 0) {
//     echo "Negativo\n";
// } else {
//     echo "Cero\n";
// }

// // Par o impar

// $numero = 8;

// if ($numero % 2 == 0) {
//     echo "Es par\n";
// } else {
//     echo "Es impar\n";
// }

// // Calificación de nota

// $nota = 9;

// if ($nota < 1 || $nota > 12) {
//     echo "Error\n";
// } elseif ($nota < 6) {
//     echo "Insuficiente\n";
// } elseif ($nota <= 8) {
//     echo "Aprobado\n";
// } elseif ($nota <= 10) {
//     echo "Muy bueno\n";
// } else {
//     echo "Excelente\n";
// }

// // Login y contraseña

// $usuario = "admin";
// $contrasena = "1234";

// if ($usuario == "admin" && $contrasena == "1234") {
//     echo "Inicio de sesión correcto\n";
// } else {
//     echo "Usuario o contraseña incorrectos\n";
// }

// // Acceso por rol

// $rol = "docente";

// if ($rol == "administrador" || $rol == "docente") {
//     echo "Acceso permitido\n";
// } else {
//     echo "Acceso denegado\n";
// }

// // Compra

// $precio = 100;
// $presupuesto = 500;
// $stock = 10;
// $cantidad = 4;

// $total = $precio * $cantidad;

// if ($stock >= $cantidad && $presupuesto >= $total) {
//     echo "Compra realizada\n";
// } else {
//     echo "No se puede realizar la compra\n";
// }

// //entrada o no / mayor o menor / acompañado 

// $edad = 16;
// $tieneEntrada = true;
// $acompanado = true;

// if (($edad >= 18 && $tieneEntrada) || ($edad < 18 && $acompanado)) {
//     echo "Puede entrar\n";
// } else {
//     echo "No puede entrar\n";
// }

// //Precio entrada 

// $Persona="Juan";
// $Edad=10;
// $PrecioEntrada=100;
// $Descuento=0.5;
// if ($Edad < 12) {
//     $PrecioEntrada = $PrecioEntrada * (1 - $Descuento);
// }
// echo "El precio de la entrada para " . $Persona . " es: $" . $PrecioEntrada . "\n";

// //Descuento 

// $PrecioUnitario=50;
// $CantidadComprada = 10;
// $Descuento= 0.1;
// if ($CantidadComprada > 5) {
//     $PrecioTotal = $PrecioUnitario * $CantidadComprada * (1 - $Descuento);
// } else {
//     $PrecioTotal = $PrecioUnitario * $CantidadComprada;
// }

// //Descuento aplicado

// $TotalCompra= 4000;

// if ($TotalCompra < 1000) {
//     $Descuento = 0;
// } else if ($TotalCompra <= 4999) {
//     $Descuento =  $TotalCompra * 0.1;
// } else if ($TotalCompra >= 5000) {
//     $Descuento = $TotalCompra * 0.2;
// }

// echo "El descuento aplicado es: " . $Descuento  . "\n";


// for  ($i = 1; $i <= 10; $i++) {
//     echo "Numero: " . $i . "\n";

// }

// for ($i = 10; $i >= 1; $i--) {
//     echo $i . "\n";
// }
// echo "¡Comenzamos!"; 
// echo "\n";


// for 
// ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo "Numeros pares: " . $i . "\n";
//     }
// }


// for 

// ($i = 1; $i <= 10; $i++) {
//     echo $numero . " x " . $i . " = " . ($numero * $i) . "\n";
// }

// //suma del 1 al 10

// for ($i = 1; $i <= 10; $i++) {
//     $suma += $i;
// }
// echo "La suma es: " . $suma . "\n";


// for ($i = 1; $i <= 100; $i++) {
//     $suma += $i;

// }

// echo "La suma es: " . $suma . "\n";

// for 
// ($i = 1; $i <= 50; $i++) {
//     if ($i % 2 == 0) {
//         echo "Numeros pares: " . $i . "\n";
//    }
// }
//         {echo "numeros pares son 25 \n";
// }

$contador = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        $contador++;
    }
}

 echo "Numeros divicible entre 3: " . $contador . "\n";




?>