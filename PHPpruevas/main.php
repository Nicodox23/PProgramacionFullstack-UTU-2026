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

// $contador = 0;

// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 3 == 0) {
//         $contador++;
//     }
// }

//  echo "Numeros divicible entre 3: " . $contador . "\n";

// contador con while

// $i = 1;

// while ($i <= 10) {
//     echo $i . "\n";
//     $i++;
// }

// // numeros pares con while
// $i = 2;

// while ($i <= 20) {
//     echo $i . "\n";
//     $i += 2;
// }

//multiplicacion con while hasta el 64 
// $numero = 1;

// while ($numero < 100) {
//     echo $numero . "\n";
//     $numero = $numero * 2;
// }

//ahorro con while

// $ahorro = 0;
// $mes = 0;

// while ($ahorro < 5000) {
//     $mes++;
//     $ahorro += 500;
//     echo "Mes " . $mes . ": $" . $ahorro . "\n";
// }

//Saludo con funcion 

function saludar() {
    echo "bienvenido\n";
}
saludar();


function saludarpersona($nombre) {
    echo "Hola " . $nombre . "\n";
}
saludarpersona("Juan");
saludarpersona("Nicolás");
saludarpersona("Ariana");

// EJERCICIO 3 — SUMAR NÚMEROS

function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}

$resultado = sumar(10, 5);

echo "La suma es: " . $resultado . "\n";


// EJERCICIO 4 — CALCULAR PRECIO TOTAL

function calcularTotal($precio, $cantidad) {
    return $precio * $cantidad;
}

$total1 = calcularTotal(100, 3);
$total2 = calcularTotal(250, 4);

echo "Total de la primera compra: $" . $total1 . "\n";
echo "Total de la segunda compra: $" . $total2 . "\n";


// BLOQUE 11 — FUNCIONES CON LÓGICA

// EJERCICIO 1 — MAYOR DE EDAD

function esMayorDeEdad($edad) {
    if ($edad >= 18) {
        return true;
    }

    return false;
}

$edad = 20;

if (esMayorDeEdad($edad)) {
    echo "Es mayor de edad\n";
} else {
    echo "Es menor de edad\n";
}


// EJERCICIO 2 — NÚMERO PAR

function esPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    }

    return false;
}

$numero = 8;

if (esPar($numero)) {
    echo "El número es par\n";
} else {
    echo "El número es impar\n";
}


// EJERCICIO 3 — APLICAR DESCUENTO

function aplicarDescuento($precio, $porcentaje) {
    $descuento = $precio * $porcentaje / 100;
    return $precio - $descuento;
}

$precioFinal = aplicarDescuento(1000, 10);

echo "Precio final: $" . $precioFinal . "\n";


// EJERCICIO 4 — CALCULAR NOTA FINAL

function calcularPromedio($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}

function estaAprobado($promedio) {
    if ($promedio >= 6) {
        return true;
    }

    return false;
}

$nota1 = 8;
$nota2 = 7;
$nota3 = 5;

$promedio = calcularPromedio($nota1, $nota2, $nota3);

echo "Promedio: " . $promedio . "\n";

if (estaAprobado($promedio)) {
    echo "El estudiante está aprobado\n";
} else {
    echo "El estudiante está desaprobado\n";
}


// BLOQUE 12 — ARRAYS INDEXADOS

// EJERCICIO 1 — LISTA DE NOMBRES

$nombres = ["Juan", "Pedro", "Lucas", "Martin", "Sofia"];

echo $nombres[0] . "\n";
echo $nombres[1] . "\n";
echo $nombres[2] . "\n";
echo $nombres[3] . "\n";
echo $nombres[4] . "\n";


// recorrer nombres

$nombres2 = ["Ari", "Nico", "Luca", "Emanuel", "Thiago"];

for ($i = 0; $i < count($nombres2); $i++) {
    echo $nombres2[$i] . "\n";
}

foreach ($nombres2 as $nombre) {
    echo $nombre . "\n";
}


// lista de precios

$precios = [100, 250, 500, 750, 1000];

echo "$" . $precios[0] . "\n";
echo "$" . $precios[1] . "\n";
echo "$" . $precios[2] . "\n";
echo "$" . $precios[3] . "\n";
echo "$" . $precios[4] . "\n";

echo "Cantidad de precios: " . count($precios) . "\n";


// suma elementos

$numeros = [10, 20, 30, 40, 50];

$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma = $suma + $numeros[$i];
}

echo "Suma con FOR: " . $suma . "\n";

$suma2 = array_sum($numeros);

echo "Suma con array_sum(): " . $suma2 . "\n";

// numeros pares array

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $numero) {

    if ($numero % 2 == 0) 
        {
    echo $numero . "\n";
  }

}
// nota <= a 6

$notas= [5, 7, 8, 4, 6, 9];

$aprovados = 0;

foreach ($notas as $nota) {
    if ($nota <= 6) {
        $aprovados++;
    }
}

echo "Cantidad de aprovados: " . $aprovados . "\n";


$nombres = ["Ari", "Nico", "Luca", "Emanuel", "Thiago"];

$buscarnombre = "Ari";
$encontrado = false;

foreach ($nombres as $nombre) {
    if ($nombre == $buscarnombre) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "El nombre fue encontrado\n";
} else {
    echo "El nombre no fue encontrado\n";
}

$numeros = [5, 10, 20, 50, 47];

$mayor = $numeros[0];
 foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
}
echo "El número mayor es: " . $mayor . "\n";