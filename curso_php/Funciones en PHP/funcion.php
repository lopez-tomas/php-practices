<html>
  <head>
    <title>Problema</title>
  </head>
  <body>

    <?php
      function mostrartitulo($men){                     ## function[nombre de la función]([parámetros]){
        echo "<h1 style=\"text-align:center\">";        ##    [algoritmo]
        echo $men;                                      ## } */
        echo "</h1>";
      }

      mostrartitulo("Primer titulo");
      echo "<br>";
      mostrartitulo("Segundo título");
      echo '<br /> <br />';

    ###########################################

      function retornarpromedio($valor1,$valor2){
        $pro=$valor1/$valor2;
        return $pro;
      }

      $v1=100;
      $v2=50;
      $p=retornarpromedio($v1,$v2); // Cuando una función retorna un dato debemos
      echo $p;                      // emplear la palabra clave return seguida
                                    // seguida del valor que devuelve.
      echo '<br /> <br />';
    ###########################################

      function cuadradocubo($valor,&$cuad,&$cub){
        $cuad=$valor*$valor;
        $cub=$valor*$valor*$valor;
        }

      cuadradocubo(2,$c1,$c2);
      echo "El cuadrado de 2 es :".'<b>'.$c1.'</b>'."<br>";
      echo "El cubo de 2 es: ".'<b>'.$c2.'</b>';

    ?>

  </body>
</html>
