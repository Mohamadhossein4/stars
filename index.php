<?php

if (isset($_POST['submit'])) {
    $i = $_POST['number1'];
    for ($a = 1; $a <= $i; $a++) {
        for ($b = $i - $a; $b >= 1; $b--) {
            echo '&nbsp';
        }
        for ($c = 1; $c <= $a; $c++) {
            echo "*";
        }
        echo "<br>";
    }


}
?>
<form method="post">
    <label>عدد را وارد کنید</label>
    <input type="number" name="number1"><br>
    <input type="submit" name="submit" value="run">


</form>

