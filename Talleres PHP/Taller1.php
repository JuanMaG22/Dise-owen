<?php
#Definir opcion
if($_POST["op"] == "Suma")
        #Operacion suma con print
{
    $Suma = $_POST["a"] + $_POST["b"];
    echo "La suma es: $Suma <br>";
    echo "<br>";
}
elseif($_POST["op"] == "Resta")
        #Operacion resa con print
{
    $Resta = $_POST["a"] - $_POST["b"];
    echo "La resta es: $Resta <br>";
    echo "<br>";
}
elseif($_POST["op"] == "Multiplicacion")
        #Operacion multiplicacion con print
{
    $Multiplicacion = $_POST["a"] * $_POST["b"];
    echo "La multiplicacion es: $Multiplicacion <br>";
    echo "<br>";
}
elseif($_POST["op"] == "Division")
        #Operacion division con print
{
    $Division = $_POST["a"] / $_POST["b"];
    echo "La division es: $Division <br>";
    echo "<br>";
}
elseif($_POST["op"] == "Area del cuadrado")
        #Operacion Area del cuadrado
{
    $Area = $_POST["a"] * $_POST["b"];
    echo "El area del cuadrado es: $Area <br>";
    echo "<br>";
}

elseif($_POST["op"] == "Menor y Mayor")

{
    if($_POST["a"] > $_POST["b"]) 
    {
        echo "El mayor es:". $_POST['a'] . '<br>';
        echo "<br>";
    }
    elseif($_POST["a"] == $_POST["b"])
    {
        echo "Los dos números son iguales". '<br>';
        echo "<br>";
    } else {
        echo "El mayor es: ". $_POST['b']. '<br>';
        echo "<br>";
    }
}

#Calcular centimetros

$Cen = $_POST["Cm"];

$Centimetros = $Cen * 100;

echo "Los centimetros son: $Centimetros <br>";
echo "<br>",

#Calcular Kilometros

$Kil = $_POST["Kl"];

$Kilometros = $Kil / 1000;

echo "Los kilometros son: $Kilometros <br>";
echo "<br>";

#Calcular pies

$Pie = $_POST["Pi"];

$Pies =  $Pie * 3.28084;

echo "Los pies son: $Pies <br>";
echo "<br>";

#Calcular Pulgadas 

$Pul = $_POST["Pu"];

$Pulgadas = $Pul * 39.3701;

echo "Las pulgadas son: $Pulgadas <br>";
echo "<br>";

#Calcular temperatura

$Grad = $_POST["Grados"];

$Fahrenheit = 9 * $Grad / 5 + 32;

echo "Los fahrenheit son: $Fahrenheit <br>";
echo "<br>";

#Calcular Galones´

$Valor = 9500;

$Galones = $_POST["Gal"] * $Valor;

echo "Valor a pagar por galon es: $Galones <br>";
echo "<br>";

?>