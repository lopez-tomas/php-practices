<html>
  <head>
    <title>Problemas</title>
  </head>
  <body>
    <?php

      function verificarClaves($pass1, $pass2){
        if ($pass1 != $pass2){
          echo '<b>Las claves ingresadas son distintas.</b>';
        }
        else if ($pass1 == $pass2){
          echo '<b>Las claves ingresadas son iguales.</b>';
        }
      }

      verificarClaves($_REQUEST['password'], $_REQUEST['password2']);

    ?>
  </body>
</html>
