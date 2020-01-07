<?php

if ($_POST){
  echo $_POST['name'];
}

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Formulario</title>
</head>
<body>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" placeholder="Name" name="name" id="">
    <br>

    <!-- MAN -->
    <label for="man">Man</label>
    <input type="radio" name="sex" value="man" id="man">
    <br>

    <!-- WOMAN -->
    <label for="woman">Woman</label>
    <input type="radio" name="sex" value="woman" id="woman">

    <!-- YEAR -->
    <select name="year" id="year">
      <option value="----">----</option>
      <?php
        for ($i=1950; $i <= 2018 ; $i++){
          echo "<option value='$i'>$i</option>";
        }
      ?>
    </select>
    <br>

    <!-- TERMS -->
    <label for="terms">Are you accept the Terms?</label>
    <input type="checkbox" name="terms" value="ok" id="terms">
    <br>

    <!-- SEND -->
    <input type="submit" value="Send">

  </form>

</body>
</html>
