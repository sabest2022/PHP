<!DOCTYPE html>

<head>
    <title> simple calculator </title>
</head>


<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator </h1>
        <form action="index.php" method="post" id="quiz-form">
            <p>
                <input type="number" name="FirstNumber" id="FirstNumber" required="required" value="">
            </p>
            <p>
                <input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <!-- <input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b> -->
            </p>

            <select name="operator">
                <option value="Sum">+</option>
                <option value="Subtraction">-</option>
                <option value="Multiplication">*</option>
                <option value="Division">/</option>
            </select>
            <button type="submit" name="button1"> Result</button>
            <?php
            // if (isset($FirstNumber) || isset($SecondNumber) || isset($operator)) {
            if (isset($_POST['button1'])) {

                $FirstNumber = $_POST['FirstNumber'];
                $SecondNumber = $_POST['SecondNumber'];

                $operator = $_POST['operator'];
                $CalculatorResult = 0.0;
                if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
                    switch ($operator) {
                        case "Sum":
                            $CalculatorResult = $FirstNumber + $SecondNumber;
                            break;
                        case "Subtraction":
                            $CalculatorResult = $FirstNumber - $SecondNumber;
                            break;
                        case "Multiplication":
                            $CalculatorResult = $FirstNumber * $SecondNumber;
                            break;
                        case "Division":
                            $CalculatorResult = $FirstNumber / $SecondNumber;
                    }
                    echo "<h1> Result:</h1>" . $CalculatorResult;
                }
            }

            ?>
        </form>

    </div>


</body>

</html>