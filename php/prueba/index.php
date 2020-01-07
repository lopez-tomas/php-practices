<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TEST</title>
</head>
<body>

  <form class="" action="info.php" method="post">

    <!-- NAME -->
    <input type="text" placeholder="Name" name="name" value="">
    <br>

    <!-- MAN -->
    <label for="man">Man</label>
    <input type="radio" name="sex" value="man" id="man">
    <br>

    <!-- WOMAN -->
    <label for="woman">Woman</label>
    <input type="radio" name="sex" value="woman" id="woman">
    <br>

    <!-- YEAR with for -->
    <select class="" name="year" id="year">
      <option value="----">----</option>
      <?php
        for ($i=1950; $i <= 2017 ; $i++) {
          echo "<option value'$i'>$i</option>";
        }
      ?>
    </select>

    <!-- MONTHS with for -->
    <select class="" name="months" id="months">
      <option value="--">--</option>
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>

    <!-- MONTHS with for -->
    <select class="" name="days" id="days">
      <option value="--">--</option>
      <?php
        for ($i=1; $i <= 31 ; $i++) {
          echo "<option value='$i'>$i</option>";
        }
      ?>
    </select>
    <br>

    <!-- Terms -->
    <label for="terms">Are you accept the Terms?</label>
    <input type="checkbox" name="terms" value="ok" id="terms  ">
    <br>

    <!-- SEND -->
    <input type="submit" name="" value="Send">

  </form>

</body>
</html>
