<?php
if (isset($_GET["num1"])) {
    include_once "calc.class.php";

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    $calculator = new Calculator((int)$num1, (int)$num2, $operator);
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniräknare</title>
</head>

<body>
    <form action="index.php">
        <input type="number" name="num1">
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mul">*</option>
        </select>
        <input type="number" name="num2">
        <button type="submit">Räkna!</button>
    </form>
    <h3 class="result"></h3>
    <script type="text/javascript">
        var result = <?php echo $calculator->calculate() ?>;
        document.querySelector(".result").append(result);
    </script>
</body>

</html>