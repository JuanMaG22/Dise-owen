<?php 

#Definimos la opcion

if($_POST["operaciones"] == "Suma")
#Operacion suma con print
{
    $Suma = $_POST["a"] + $_POST["b"];
    echo "La suma es: $Suma";
    echo "<br>";
}

elseif($_POST["operaciones"] == "Resta")
{
    $Resta= $_POST["a"] - $_POST["b"];
    echo "La resta es: $Resta";
    echo "<br>";
}

elseif($_POST["operaciones"] == "Multiplicacion")
{
    $Multiplicacion = $_POST["a"] * $_POST["b"];
    echo "La multiplicacion es: $Multiplicacion";
    echo "<br>";
}

elseif($_POST["operaciones"] == "Division")
{
    $Division = $_POST["a"] / $_POST["b"];
    echo "La <division es: $Division";
    echo "<br>";
}
?>
