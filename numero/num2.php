<! DOCTYPE html>
<html lang="es">
    <header>
    <title>Numeros Romanos Obtenidos</title>
    </header>
  <body> <center>
    <?php
    $valor=$_REQUEST['entero'];
   

    echo "El Numero $valor en numero romano es: <strong>".convertirNum($valor)."</strong>";
    echo "<br/>";
    echo" <a href='javascript:history.back()'>Volver</a>";

    function convertirNum($num) 
      {
       /*** intval(xxx) para que convierta explicitamente a int ***/
       $n = intval($num);
       $res = '';
       /*** Array con los numeros romanos  ***/
       $roman_numerals = array(
          'M'  => 1000,
          'CM' => 900,
          'D'  => 500,
          'CD' => 400,
          'C'  => 100,
          'XC' => 90,
          'L'  => 50,
          'XL' => 40,
          'X'  => 10,
          'IX' => 9,
          'V'  => 5,
          'IV' => 4,
          'I'  => 1);
       
       foreach ($roman_numerals as $roman => $number) 
       {
        /*** Dividir para encontrar resultados en array ***/
        $matches = intval($n / $number);
       
        /*** Asignar el numero romano al resultado ***/
        $res .= str_repeat($roman, $matches);
       
        /*** Descontar el numero romando al total ***/
        $n = $n % $number;
       }
       
       /*** Res = String ***/
       return $res;
      }
    ?>
    </center>
    </body>
</html>