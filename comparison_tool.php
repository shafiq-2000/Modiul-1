<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>

    <?php
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        $result = "The larger number is: $largerNumber";
    }
    ?>

    <form method="POST" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" id="number1" required><br>

        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" id="number2" required><br>

        <input type="submit" value="Compare Numbers">
    </form>

    <?php
    // Display the result
    if (!empty($result)) {
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
