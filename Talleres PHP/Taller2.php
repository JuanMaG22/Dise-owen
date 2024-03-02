<?php
        #Numero Aleatorio
echo "A CONTINUACION VALIDAR NUMERO ALEATORIO SI ES PAR <br>";
echo "<br>";

$Numero_Aleatorio = mt_rand(1,1000);

if($Numero_Aleatorio %2 == 0)
{
    echo "El numero aleatorio es: $Numero_Aleatorio y es par <br>";
    echo "<br>";
}
elseif($Numero_Aleatorio %2 == 1)
{
    echo "El numero aleatorio es: $Numero_Aleatorio y es impar <br>";
    echo "<br>";
}
echo "EL RESULTADO DE LAS OPERACIONES ES: <br>";
echo "<br>";

        #Definir opcion

if($_POST["Operaciones"] == "Suma")
        #Operacion suma con print
{
    $Suma = $_POST["a"] + $_POST["b"];
    echo "La suma es: $Suma <br>";
    echo "<br>";
}
elseif($_POST["Operaciones"] == "Resta")
        #Operacion resa con print
{
    $Resta = $_POST["a"] - $_POST["b"];
    echo "La resta es: $Resta <br>";
    echo "<br>";
}
elseif($_POST["Operaciones"] == "Multiplicacion")
        #Operacion multiplicacion con print
{
    $Multiplicacion = $_POST["a"] * $_POST["b"];
    echo "La multiplicacion es: $Multiplicacion <br>";
    echo "<br>";
}
elseif($_POST["Operaciones"] == "Division")
        #Operacion division con print
{
    $Division = $_POST["a"] / $_POST["b"];
    echo "La division es: $Division <br>";
    echo "<br>";
}
        #Radicacion

$RAIZ = $_POST["Raiz"];

$Radicacion = $_POST["Raiz"] ** (0.5);

echo "La raiz cuadrada es: $Radicacion <br>";
echo "<br>";

        #Cuantas vocales hay?

$hola = $_REQUEST["hola"];

$counter = 0;

for($i = 0; $i < strlen($hola); $i++){
    switch($hola[$i]) {
        case 'A':
        case 'a': $counter++;
            break;
        case 'E':
        case 'e': $counter++;
            break;
        case 'I':
        case 'i': $counter++;
            break;
        case 'O':
        case 'o': $counter++;
            break;
        case 'U':
        case 'u': $counter++;
            break;
    }
}

if($counter == 1){
    echo "La palabra $hola solo tiene 1 $counter vocal <br>";
    echo "<br>";
}else{
    echo "La palabra tiene $counter vocales <br>";
    echo "<br>";
}
        #Usuario vs Algoritmo

echo "USUARIO VS ALGORITMO <br>";
echo "<br>";

$Usuario = $_POST["random"];

if($Usuario > $Numero_Aleatorio)
{
    echo "Felicidades, le ganaste al algoritmo. El numero que ingrestaste fue: $Usuario vs $Numero_Aleatorio <br>";
    echo "<br>";
}

elseif ($Numero_Aleatorio > $Usuario)

{
    echo "Lastima, el algoritmo triunfo. El numero que ingresaste fue: $Usuario vs $Numero_Aleatorio <br>";
    echo "<br>";
}

$a=0;
$n=$_POST["primo"];
for ($i=1; $i<=$n; $i++){
    if ($n%$i==0){
        $a=$a+1;
    }
}

if ($a==2){
    echo $n. "Es un numero primo";
}
else{
    echo $n. "No es un numero primo";
}
?>