<!DOCTYPE html>
<html>

<head>
    <title>My first local PHP file</title>
</head>

<body>
    <h1>My first PHP file</h1>
    <?php
    $name = "Saeed Askarian";
    echo $name;
    echo '<br>';
    echo "substr($name, 6, 8)";
    echo '<br>';
    // echo substr($name, 6, 8);
    echo max(40, 128);
    echo ' <p> PHP is now working!!!</p>';
    ?>


    <!-- Your Name is:
 
         <form action="test.php" method="get">
          Name: <input type="text" name="name">
          <input type="submit">
          </form> -->
    <form action="test.php" method="get">
        <!-- color: <input type="text" name="color"><br>
        celebrity: <input type="text" name="celebrity"><br>  -->
        Number 1: <input type="number" name="num1"><br>
        Number 2: <input type="number" name="num2"><br>
        appels: <input type="checkbox" name="fruits[]" value="apple"><br>
        oranges: <input type="checkbox" name="fruits[]" value="orange"><br>
        <input type="submit">
    </form>
    <br>
    <?php
    //   $color = $_POST["color"];
    //   $celebrity = $_POST["celebrity"];
    //   $fruits = $_GET["fruits"];
    //   echo "$array_slice($fruits,1)";
    $grade = 10;
    $grades = array("saeed" => 20 * $grade, "pam" => "A+", "emma" => "B+");
    // echo array
    $mygrade = $grades["pam"];
    echo "Your garde is:  $mygrade <br>";
    // echo "<h1>$grades[1] $grade Hello World!</h1>";
    function myfunc($one, $two, $three)
    {
        return $one + $two + $three;
    };
    echo myfunc(3, 4 * 2, 5), "<br>";
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    echo myfunc($num1, $num2, 4);
    echo "<br>";
    $isMale = true;
    $isTall = true;
    if ($isMale && $isTall) {
        echo " Is male and tall <br>";
    } elseif ($isMale || $isTall) {
        echo "Is male or tall <br>";
    }
    if (!(!$isTall)) {
        echo "Is male or tall <br>";
    }

    //   echo count($fruits);
    //   echo " my favorite color is : $color <br>";
    //   echo  " celebrity is $celebrity <br>";
    ?>
    <?php
    $x = 1;
    while ($x <= 3) {
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
</body>

</html>